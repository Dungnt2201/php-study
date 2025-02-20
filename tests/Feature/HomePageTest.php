<?php
/*Dưới đây là một Feature Test để kiểm tra màn hình Home của bạn. Test này sẽ kiểm tra các yêu cầu sau:

Người dùng có thể truy cập trang chủ (/home).
Trang hiển thị đúng tiêu đề "Travel Blog".
Nếu người dùng đăng nhập, tên của họ sẽ xuất hiện trên màn hình.
Các bài viết trên trang chủ hiển thị đúng thông tin.
*/
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function home_page_loads_correctly()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Travel Blog');
    }

    /** @test */
    public function logged_in_user_can_see_their_name()
    {
        $user = User::factory()->create(['name' => 'John Doe']);

        $response = $this->actingAs($user)->get(route('home'));

        $response->assertSee("Welcome, John Doe");
    }

    /** @test */
    public function home_page_displays_posts_correctly()
    {
        $post = Post::factory()->create([
            'title' => 'Test Travel Guide',
            'excerpt' => 'This is a short summary of the post.',
            'created_at' => now()->subDays(1),
        ]);

        $response = $this->get(route('home'));

        $response->assertSee('Test Travel Guide');
        $response->assertSee('This is a short summary of the post.');
    }
}
