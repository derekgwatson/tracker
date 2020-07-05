@extends('layouts.app')

@section('content')
        <table class="table" border="0">
            <tr>
                <td width="10%"><strong>Order: </strong></td>
                <td width="40%" align="left">{{ $orderlines[0]->orderno }}</td>
            </tr>
            <tr>
                <td><strong>Customer: </strong></td>
                <td align="left">{{ $orderlines[0]->customer }}</td>
            </tr>
            <tr>
                <td width="10%"><strong>Email: </strong></td>
                <td width="40%" align="left">&nbsp;{{ $orderlines[0]->contact_emailaddress }}</td>
            </tr>
            <tr>
                <td><strong>Phone: </strong></td>
                <td align="left">&nbsp;{{ $orderlines[0]->contact_phone }}</td>
            </tr>
            <tr>
                <td><strong>Mobile: </strong></td>
                <td align="left">{{ $orderlines[0]->contact_mobile }}</td>
            </tr>
            <tr>
                <td><strong>Quoted: </strong></td>
                <td align="left">{{ \Carbon\Carbon::parse($orderlines[0]->datedoc)->setTimezone('Australia/Sydney')->format('d M Y') }}</td>
            <tr>
                <td><strong>Accepted: </strong></td>
                <td align="left">{{ \Carbon\Carbon::parse($orderlines[0]->date_order_accepted)->setTimezone('Australia/Sydney')->format('d M Y') }}</td>
            </tr>
            <tr>
                <td><strong>Last&nbsp;Updated: </strong></td>
                <td align="left">{{ \Carbon\Carbon::parse($orderlines[0]->order_history_lastactiondate)->setTimezone('Australia/Sydney')->format('d M Y g:i a') }}</td>
            </tr>
        </table>
        <hr>
        <table class="table" border="0">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @foreach($orderlines as $orderline)
            <tr>
                <td>{{ $orderline->inventory_item }}</td>
                <td>{{ $orderline->workflow_job_tracking_status }}</td>
            </tr>
            @endforeach
        </table>
        <hr>
        <small>Note, this data is not live. It was last generated on {{\Carbon\Carbon::parse($orderlines[0]->created_at)->setTimezone('Australia/Sydney')->format('d M Y \a\t g:i a')}}</small><br>
    <a href="/" class="btn btn-primary">New Search</a>

@endsection
