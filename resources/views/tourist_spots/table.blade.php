<div class="table-responsive">
    <table class="table" id="touristSpots-table">
        <thead>
            <tr>
                <th>Tourist Spot</th>
        <th>Description</th>
        <th>Expenses</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($touristSpots as $touristSpot)
            <tr>
                <td>{{ $touristSpot->Tourist_spot }}</td>
            <td>{{ $touristSpot->description }}</td>
            <td>{{ $touristSpot->Expenses }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['touristSpots.destroy', $touristSpot->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('touristSpots.show', [$touristSpot->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('touristSpots.edit', [$touristSpot->id]) }}" class='btn btn-default btn-xs'>
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
