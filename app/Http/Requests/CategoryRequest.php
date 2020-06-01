<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch ($this->method()) {
            case 'POST':
                $authorized = true;
                break;
            case 'PUT':
                $category = Category::find($this->route('category'));
                // $authorized = $this->user()->can('update', $category);
                break;
            default:
                $authorized = false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string',
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required|string',
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
        return $validated;
    }
}
