<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class AutoDeleteExpJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-delete-exp-job';
    protected $description = 'Tự động xóa công việc hết hạn từ cơ sở dữ liệu';
    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $post = Post::where('exp_date', '<', now());
        $this->info('Có 1 công việc  đã hết hạn');
        $post->delete();
    }
}
