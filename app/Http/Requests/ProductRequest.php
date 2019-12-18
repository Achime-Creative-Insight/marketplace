<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch ($this->method) {
            case 'POST':
                $authorized = true;
                break;
            case 'PUT':
                $product = Product::find($this->route('product'));
                $authorized = $this->user()->can('update', $product);
                break;
            default:
                $authorized = false;
        }
        return $authorized;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method) {
            case 'POST':
                return [
                    'name' => 'required|string',
                    'image' => 'file',
                    'description' => 'required|string',
                    'price' => 'required|float',
                    'is_physical' => 'required|boolean',
                    'category_id' => 'required|int|exists:categories,id'
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'string',
                    'image' => 'file',
                    'description' => 'string',
                    'price' => 'float',
                    'is_physical' => 'boolean',
                    'category_id' => 'int|exists:categories,id'
                ];
                break;
            default:
                return [];
                break;
        }
    }

    public function validated()
    {
        $validated = parent::validated();
        $validated['user_id'] = $this->user()->id();
        return $validated;
    }
}
