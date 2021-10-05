<div class="table-responsive">
    <table class="table" id="otherOptions-table">
        <thead>
            <tr>
                <th>Spot Name</th>
        <th>Address</th>
        <th>Payment</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($otherOptions as $otherOption)
            <tr>
                <td>{{ $otherOption->Spot_name }}</td>
            <td>{{ $otherOption->Address }}</td>
            <td>{{ $otherOption->Payment }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['otherOptions.destroy', $otherOption->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('otherOptions.show', [$otherOption->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('otherOptions.edit', [$otherOption->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
