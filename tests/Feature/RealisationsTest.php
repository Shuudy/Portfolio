<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Models\Realisation;
use App\Livewire\PaginationRealisationsTable;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RealisationsTest extends TestCase
{
    use DatabaseTransactions;
 
    public function test_it_can_show_realisations_admin(): void
    {
        $realisation = Realisation::factory()->create(['title' => 'Realisation TestUnit', 'subtitle' => 'JS, SASS, HTML']);

        Livewire::test(PaginationRealisationsTable::class)
            ->assertSee($realisation->title)
            ->assertSee($realisation->subtitle);
    }

    public function test_it_can_create_realisations_admin(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->put(route('admin.realisations.create'), [
            'title' => 'Nouvelle réalisation',
            'subtitle' => 'Rust, SCSS, Ruby',
            'content' => 'Contenu de la nouvelle réalisation'
        ]);

        Livewire::test(PaginationRealisationsTable::class)
            ->assertSee('Nouvelle réalisation')
            ->assertSee('Rust, SCSS, Ruby');
    }

    public function test_it_can_edit_realisation_admin(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $realisation = Realisation::factory()->create(['title' => 'Realisation TestUnit', 'subtitle' => 'JS, SASS, HTML']);

        $this->patch(route('admin.realisations.update', $realisation->id), [
            'title' => 'Edition réalisation',
            'subtitle' => 'Go, OCamel, TS',
            'content' => $realisation->content
        ]);

        Livewire::test(PaginationRealisationsTable::class)
            ->assertSee('Edition réalisation')
            ->assertSee('Go, OCamel, TS');
    }

    public function test_it_can_displays_created_realisation()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->put(route('admin.realisations.create'), [
            'title' => 'Nouvelle réalisation super intéressante',
            'subtitle' => 'Python, Java, CSS',
            'content' => 'Création application avec python java et css'
        ]);

        $response = $this->get(route('realisations.index'));

        $response->assertSee('Nouvelle réalisation super intéressante');
        $response->assertSee('Python, Java, CSS');
        $response->assertSee('Création application avec python java et css');
    }

    public function test_it_can_displays_realisation()
    {
        $realisation = Realisation::factory()->create(['title' => 'Nouvelle réalisation super intéressante', 'subtitle' => 'Python, Java, CSS', 'slug' => 'nouvelle-realisation-super-interessante', 'content' => 'Création application avec python java et css']);

        $response = $this->get(route('realisations.show', ['id' => $realisation->id, 'slug' => 'nouvelle-realisation-super-interessante']));
        $response->assertStatus(200);

        $response->assertSee('Nouvelle réalisation super intéressante');
        $response->assertSee('Python, Java, CSS');
        $response->assertSee('Création application avec python java et css');
    }
}
