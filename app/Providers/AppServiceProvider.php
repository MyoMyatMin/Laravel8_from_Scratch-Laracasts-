<?php

namespace App\Providers;

use App\Services\MailchimpNewsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      app()->bind(Newsletter::class,function(){

             $client = new ApiClient();
             return $client->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us5'
            ]);
            return new MailchimpNewsletter($client);
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
        Gate::define('admin',function(User $user){
          return $user->username === 'marty';
        });

        Blade::if('admin',function(){
          return request()->user()?->can('admin');
        });
    }
}
