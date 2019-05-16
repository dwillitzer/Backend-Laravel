<?php

namespace App\Http\Requests\SiteSurvey;

use App\Http\Requests\ApiRequest;

/**
 * Class CreateSiteSurveyQuestionRequest
 *
 * @package App\Http\Requests\SiteSurvey
 *
 * @OA\Schema(
 *     type="object",
 *     required={"name"},
 *     @OA\Property(
 *          property="name",
 *          description="Site survey question name",
 *          type="string",
 *          example="Why?"
 *      ),
 *     @OA\Property(
 *          property="is_active",
 *          description="Indicates whether site survey question is active or not",
 *          type="boolean",
 *          example="false",
 *     ),
 * )
 */
class CreateSiteSurveyQuestionRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|string|unique:site_survey_questions',
            'is_active' => 'boolean',
        ];
    }
}
