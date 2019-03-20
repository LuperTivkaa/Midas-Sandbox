<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Loan;

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



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Done by me Luper Tivkaa
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('en_NG');
          });
    }
}
