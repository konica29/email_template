<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Enquiry;
use Illuminate\Console\Command;

class DeleteEnquiries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:enquiries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Enquiries';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        info("working");
        $date = Carbon::now()->subMonths(6)->toDateTimeString();

        Enquiry::where('created_at', '<',$date)->each(function ($enquiry) {
           $enquiry->delete();
       });
    }
}
