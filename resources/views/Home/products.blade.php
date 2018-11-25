@extends('Layouts.app') 
@section('content')
<h1>Products</h1>
<div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('images/midas-product-danger.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Emergency Loan</h3>
                <h6 class="text-muted">Features</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Interest Rate <span class="badge badge-danger">7.5%</span> </li>
                <li class="list-group-item">Default Charge <span class="badge badge-danger">10%</span></li>
                <li class="list-group-item">Equity Savings Required <span class="badge badge-danger">Nil</span></li>
                <li class="list-group-item">Loan Processing Fee <span class="badge badge-danger">N 1,000</span></li>
                <li class="list-group-item">Minimum Loan Amount <span class="badge badge-danger">N 50,000</span></li>
                <li class="list-group-item">Maximum Loan Amount <span class="badge badge-danger">N 1.5 Million</span></li>
                <li class="list-group-item">Maximum Loan Tenor <span class="badge badge-danger">6 Months</span></li>
                <li class="list-group-item">Membership Duration <span class="badge badge-danger">1 Month</span></li>
                <li class="list-group-item">Payslip Required <span class="badge badge-danger">Yes</span></li>
                <li class="list-group-item">Loan Payment Subject To Availability of Funds <span class="badge badge-danger">Yes</span></li>
                <li class="list-group-item">2 Guarantors <span class="badge badge-danger">No</span></li>
                <li class="list-group-item">Loan Processing Fee Non-Refundable <span class="badge badge-danger">Yes</span></li>
                <li class="list-group-item">Loan Subject To Queuing <span class="badge badge-danger">No</span></li>
                <li class="list-group-item">Payment Based on First Come, First Served <span class="badge badge-danger">Yes</span></li>
                <li class="list-group-item">Contract Staff Eligible <span class="badge badge-danger">Yes</span></li>
                <li class="list-group-item">Grace Period <span class="badge badge-danger">No</span></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-sm btn-danger">Apply Now</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3">

        <div class="card">
            <img class="card-img-top" src="{{asset('images/midas-product-primary.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Short Term Loan</h3>
                <h6 class="text-muted">Features</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Interest Rate <span class="badge badge-success">7.5%</span> </li>
                <li class="list-group-item">Default <span class="badge badge-success">10%</span></li>
                <li class="list-group-item">Equity Savings Required <span class="badge badge-success">20%</span></li>
                <li class="list-group-item">Loan Processing Fee <span class="badge badge-success">N 500</span></li>
                <li class="list-group-item">Minimum Loan Amount <span class="badge badge-success">N 100,000</span></li>
                <li class="list-group-item">Maximum Loan Amount <span class="badge badge-success">N 5 Million</span></li>
                <li class="list-group-item">Maximum Loan Tenor <span class="badge badge-success">12 Months</span></li>
                <li class="list-group-item">Membership Duration <span class="badge badge-success">1 Month</span></li>
                <li class="list-group-item">Payslip Required <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Loan Payment Subject To Availability of Funds <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">2 Guarantors <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Loan Processing Fee Non-Refundable <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Loan Subject To Queuing <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Payment Based on First Come, First Served <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Contract Staff Eligible <span class="badge badge-success">Yes</span></li>
                <li class="list-group-item">Grace Period <span class="badge badge-success">No</span></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-sm btn-success">Apply Now</a>
            </div>
        </div>

    </div>

    <div class="col-sm-12 col-md-3 col-lg-3">

        <div class="card">
            <img class="card-img-top" src="{{asset('images/midas-product-light.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Medium Term Loan</h3>
                <h6 class="text-muted">Features</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Interest Rate <span class="badge badge-info">10%</span> </li>
                <li class="list-group-item">Default <span class="badge badge-info">10%</span></li>
                <li class="list-group-item">Equity Savings Required <span class="badge badge-info">30%</span></li>
                <li class="list-group-item">Loan Processing Fee <span class="badge badge-info">N 500</span></li>
                <li class="list-group-item">Minimum Loan Amount <span class="badge badge-info">N 200, 000</span></li>
                <li class="list-group-item">Maximum Loan Amount <span class="badge badge-info">N 5 Million</span></li>
                <li class="list-group-item">Maximum Loan Tenor <span class="badge badge-info">24 Months</span></li>
                <li class="list-group-item">Membership Duration <span class="badge badge-info"> 4 Months</span></li>
                <li class="list-group-item">Payslip Required <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">Loan Payment Subject To Availability of Funds <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">2 Guarantors <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">Loan Processing Fee Non-Refundable <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">Loan Subject To Queuing <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">Payment Based on First Come, First Served <span class="badge badge-info">Yes</span></li>
                <li class="list-group-item">Contract Staff Eligible <span class="badge badge-info">No</span></li>
                <li class="list-group-item">Grace Period <span class="badge badge-info">No</span></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-sm btn-info">Apply Now</a>
            </div>
        </div>

    </div>

    <div class="col-sm-12 col-md-3 col-lg-3">

        <div class="card">
            <img class="card-img-top" src="{{asset('images/midas-product-warning.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Long Term Loan</h3>
                <h6 class="text-muted">Features</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Interest Rate <span class="badge badge-warning">15%</span> </li>
                <li class="list-group-item">Default <span class="badge badge-warning">10%</span></li>
                <li class="list-group-item">Equity Savings Required <span class="badge badge-warning">30%</span></li>
                <li class="list-group-item">Loan Processing Fee <span class="badge badge-warning">N 500</span></li>
                <li class="list-group-item">Minimum Loan Amount <span class="badge badge-warning">N 500, 000</span></li>
                <li class="list-group-item">Maximum Loan Amount <span class="badge badge-warning">N 5 Million</span></li>
                <li class="list-group-item">Maximum Loan Tenor <span class="badge badge-warning">60 Months</span></li>
                <li class="list-group-item">Membership Duration <span class="badge badge-warning">4 Months</span></li>
                <li class="list-group-item">Payslip Required <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">Loan Payment Subject To Availability of Funds <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">2 Guarantors <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">Loan Processing Fee Non-Refundable <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">Loan Subject To Queuing <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">Payment Based on First Come, First Served <span class="badge badge-warning">Yes</span></li>
                <li class="list-group-item">Contract Staff Eligible <span class="badge badge-warning">No</span></li>
                <li class="list-group-item">Grace Period <span class="badge badge-warning">No</span></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-sm btn-warning">Apply Now</a>
            </div>
        </div>

    </div>


</div>
@endsection