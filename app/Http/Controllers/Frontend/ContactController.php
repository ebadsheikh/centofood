<?php

namespace App\Http\Controllers\Frontend;

use App\Actions\Contact\StoreContact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('frontend.contact_us.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContact $action
     * @param StoreContactRequest $request
     * @return RedirectResponse
     */
    public function store(StoreContactRequest $request, StoreContact $action): RedirectResponse
    {
        try {
            $action->execute($request->validated());

            //  Send mail to admin
            Mail::send('contact.index', [
                'name' => $request->get['name'],
                'email' => $request->get['email'],
                'phone' => $request->get['phone'],
                'message' => $request->get['message'],
            ], function ($message) use ($request) {
                $message->from($request->email);
                $message->to('digambersingh126@gmail.com', 'Admin')->subject($request->get('message'));
            });

            return redirect()->route('category.index')->withSuccess(__('thank_you_for_contact_us.we_will_contact_you_shortly.'));
        } catch (Exception $ex) {
            return back()->withError(__('something_went_wrong!'));
        }
    }
}
