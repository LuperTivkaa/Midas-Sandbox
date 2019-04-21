<table class="highlight">
    <thead>
        <tr>

            <th>Name</th>
            <th>User ID</th>
            <th>Product</th>
            <th>Product ID</th>
            <th>Units</th>
            <th>Subscription ID</th>
            <th>Total</th>
            <th>Monthly RePay</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allProductSub as $active)
        <tr>
            <td>{{$active->user->first_name}} {{$active->user->last_name}}</td>
            <td>{{$active->user_id}}</td>
            <td>{{$active->product->name}}</td>
            <td>{{$active->product->id}}</td>
            <td>{{$active->units}}</td>
            <td>{{$active->id}}</td>
            <td>{{$active->total_amount}}</td>
            <td>{{$active->monthly_repayment}}</td>
            <td>{{now()->toDateString()}}</td>
        </tr>
        @endforeach
    </tbody>
</table>