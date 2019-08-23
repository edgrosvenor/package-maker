namespace Tests\Unit;

use App\Actions\{{ $name }};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class {{ $name }}Test extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** test */
    public function can_{{ \Illuminate\Support\Str::kebab($name) }}()
    {
        $this->assertTrue(false);
    }
}
