<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Fileupload;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FileuploadController
 */
class FileuploadControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $fileuploads = Fileupload::factory()->count(3)->create();

        $response = $this->get(route('fileupload.index'));

        $response->assertOk();
        $response->assertViewIs('file_upload.index');
        $response->assertViewHas('fileuploads');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FileuploadController::class,
            'store',
            \App\Http\Requests\FileuploadStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $file_name = $this->faker->word;
        $file_ext = $this->faker->word;
        $file_size = $this->faker->word;
        $file_saved_path = $this->faker->word;
        $random_name = $this->faker->word;
        $uploaded_by = User::factory()->create();

        $response = $this->post(route('fileupload.store'), [
            'file_name' => $file_name,
            'file_ext' => $file_ext,
            'file_size' => $file_size,
            'file_saved_path' => $file_saved_path,
            'random_name' => $random_name,
            'uploaded_by' => $uploaded_by->id,
        ]);

        $fileuploads = Fileupload::query()
            ->where('file_name', $file_name)
            ->where('file_ext', $file_ext)
            ->where('file_size', $file_size)
            ->where('file_saved_path', $file_saved_path)
            ->where('random_name', $random_name)
            ->where('uploaded_by', $uploaded_by->id)
            ->get();
        $this->assertCount(1, $fileuploads);
        $fileupload = $fileuploads->first();

        $response->assertRedirect(route('fileupload.index'));
        $response->assertSessionHas('fileupload', $fileupload);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $fileupload = Fileupload::factory()->create();

        $response = $this->delete(route('fileupload.destroy', $fileupload));

        $response->assertRedirect(route('fileupload.index'));

        $this->assertSoftDeleted($fileupload);
    }
}
