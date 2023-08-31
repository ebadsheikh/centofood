@if (count($categories) > 0)
    @foreach ($categories as $category)
        <div class="col-6 col-md-3 col-lg-2">
            <a href="{{ route('category.show') }}">
                <div class="category-boxes">
                    <div class="img-sec mt-2">
                        @if (isset($category['image']))
                            <img src="{{ $category->getFirstMediaUrl('category.images') }}"
                                 class="image-category" alt="">
                        @else
                            <img
                                src="{{ asset('website/assets/images/category/category-6326eb0cb91e0.jpg') }}"
                                class="image-category" alt="">
                        @endif
                    </div>
                    <h4>{{ $category['name'] }}</h4>
                    <button class="btn btn-solid my-2 rounded-circle btn-xs"><i
                            class="fa fa-solid fa-greater-than"></i>
                    </button>
                </div>
            </a>
        </div>
    @endforeach
@endif
