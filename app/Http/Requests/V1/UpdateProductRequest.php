<?php

namespace App\Http\Requests\V1;

use App\Status\ProductStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => ['sometimes','required', Rule::exists('categories', 'id')],
            'branch_id' => ['sometimes','required', Rule::exists('branches', 'id')],
            'name' => ['sometimes','required', Rule::unique('products', 'name')],
            'description' => ['sometimes','required', 'string'],
            'price' => ['sometimes','required', 'decimal:2'],
            'sale_price' => ['sometimes','nullable', 'decimal:2'],
            'sale_expire_date' => ['sometimes','nullable', 'date'],
            'status' => ['sometimes','required', Rule::in([
                ProductStatus::created,
                ProductStatus::published,
                ProductStatus::stopped,
                ProductStatus::seasonal,
                ProductStatus::discounted,
                ProductStatus::soldOut
            ])],

        ];
    }
}
