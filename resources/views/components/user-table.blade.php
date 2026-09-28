<div class="card border-0 shadow-sm">

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($users as $user)

                    <tr>

                        <td class="px-4">
                            {{ $user->id }}
                        </td>

                        <td class="fw-semibold">
                            {{ $user->nama }}
                        </td>

                        <td>
                            {{ $user->npm }}
                        </td>

                        <td>
                            <span class="badge bg-primary">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>