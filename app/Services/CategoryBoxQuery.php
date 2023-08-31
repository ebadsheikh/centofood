<?php

namespace App\Services;

use App\Enums\CategoryEnum;
use App\Models\Category;

class CategoryBoxQuery
{
    public static function getCategories(?string $callFrom = null)
    {
        $query = Category::withCount(['foods']);
        if ($callFrom === CategoryEnum::CATEGORY_SECTION_HOME_PAGE->value) {
            $query->limit(6);
        } else {
            $query->paginate(20);
        }

        $categories = $query->get();

        return $categories;
    }
}
