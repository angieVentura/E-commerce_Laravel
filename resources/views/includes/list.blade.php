<div class="container-list">
    <h2>{{ $title }}</h2>
    <a href="{{ route($section . '.create') }}" >Add</a>
    <table class="table">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th scope="col">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    @foreach ($headers as $header)
                        @if (isset($item[$header]))
                            <td>{{ $item[$header] }}</td>
                        @else
                            <td></td>
                        @endif
                    @endforeach
                    <td>
                        <form action="{{ route($section . '.edit', $item) }}" method="GET">
                            @csrf

                            <button type="submit" data-twe-ripple-init>
                                UPDATE
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route($section . '.destroy', $item) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" data-twe-ripple-init>
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
