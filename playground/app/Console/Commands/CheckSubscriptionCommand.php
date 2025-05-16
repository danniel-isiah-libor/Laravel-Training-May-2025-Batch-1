<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckSubscriptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check subscription status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $model = Subscription::where('status', 'pending')->where('expiry_date', '<=', now())->cursor();

        // $model->each(function ($item) {
        //     // sending notification to user, subscription expired
        //     // event(new SubscriptionExpired($item));
        // });
    }
}
