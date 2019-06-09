<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Loan;
use App\Role;
use App\User;
use App\Saving;
use App\TargetSaving;

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
        view()->composer(['LoanSub.create','LoanSub.editLoanSub','LoanSub.newLoan'], function($view){
            $view->with('loanProd', Loan::loanProducts());
        });

          //view composer for new user
          view()->composer(['Registration.newUser','Users.editProfile'], function($view){
            $view->with('roles', Role::allRoles());
        });
        //TODO
        /**
         * Create view composer for user dashboard
         */
        view()->composer('inc.dashboard-overview', function($view){
            $view->with('totalSaving', Saving::mySavings(auth()->id()));
        });

        view()->composer('inc.dashboard-overview', function($view){
            $view->with('tsSaving', TargetSaving::myTargetSavings(auth()->id()));
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
