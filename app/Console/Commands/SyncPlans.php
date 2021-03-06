<?php

namespace App\Console\Commands;
use Braintree_Plan;
use App\Plan;
use Illuminate\Console\Command;

class SyncPlans extends Command

{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'braintree:sync-plans';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync with online plans on Braintree';
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
        // Empty table
        Plan::truncate();
        // Get plans from Braintree
        $braintreePlans = Braintree_Plan::all();
        // uncomment the line below to dump the plans when running the command
        // var_dump($braintreePlans);
        // Iterate through the plans while populating our table with the plan data
        foreach ($braintreePlans as $braintreePlan) {
            Plan::create([
                'name' => $braintreePlan->name,
                'slug' => str_slug($braintreePlan->name),
                'braintree_plan' => $braintreePlan->id,
                'cost' => $braintreePlan->price,
                'description' => $braintreePlan->description,
            ]);
        }
    }
}