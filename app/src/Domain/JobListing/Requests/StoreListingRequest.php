<?php

namespace App\src\Domain\JobListing\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreListingRequest extends FormRequest
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
            'company'       => ['required', 'string', 'max:255', Rule::unique('job_listings', 'company')],
            'title'         => 'required|string|max:255',
            'location'      => 'required|string|max:255',
            'website'       => 'required|string|max:255',
            'email'         => ['required', 'string', 'email'],
            'tags'          => 'required|string|max:255',
            'description'   => 'required|string|max:255',
        ];
    }
}
