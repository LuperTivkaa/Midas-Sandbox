<table class="highlight">
    <thead>
        <tr>

            <th>Name</th>
            <th>Loan</th>
            <th>Monthly RePay</th>
            <th>Due</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loanSub as $active)
        <tr>
            <td>{{$active->user->first_name}} {{$active->user->last_name}}</td>
            <td>{{$active->loan->description}}</td>
            <td>{{number_format($active->monthly_deduction,2,'.',',')}}</td>
            <td>{{$active->loan_end_date->toDateString()}}</td>
            {{-- <td><a href="/#/{{$active->id}}">More</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>