<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Loan;
use App\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        
        //view composer for product list
        view()->composer(['ProductSub.create','ProductSub.editSubscription'], function($view){
            $view->with('prodList', Product::productList());
        });

        //view composer for loan product list
        view()->composer(['LoanSub.create','LoanSub.editLoanSub'], function($view){
            $view->with('loanProd', Loan::loanProducts());
        });

          //view composer for new user
          view()->composer(['Registration.newUser','Users.editProfile'], function($view){
            $view->with('roles', Role::allRoles());
        });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
    }
}
