@extends ('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Variant</h1>
        <a href="{{route('variant.create')}}" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($variants as $variant)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $variant->name }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-5">
                            <div class="btn-group" role="group" aria-label="Aksi variant">
                                <a href="{{ route('variant.edit', $variant->id) }}" class="btn btn-sm btn-warning text-white">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $variant->id }}">
                                    <i class="fas fa-trash me-1"></i>Hapus
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal{{ $variant->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $variant->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $variant->id }}">
                                            <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p class="lead">Apakah Anda yakin ingin menghapus produk ini?</p>
                                        <p class="text-muted">Tindakan ini tidak dapat dibatalkan. Apabila sudah menekan
                                            tombol Hapus</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fas fa-times me-1"></i>Batal
                                        </button>
                                        <form action="{{ route('variant.destroy', $variant->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash me-1"></i>Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection
