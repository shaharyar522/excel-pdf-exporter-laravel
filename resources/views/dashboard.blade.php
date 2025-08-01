<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('ccs/style.css')}}">
</head>

<body>
    <div class="header text-center">
        <h1>Student Records Management System</h1>
    </div>

    <div class="container">

        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('export.studentsrecord') }}" class="btn btn-success btn-export btn-excel">
                <i class="bi bi-file-earmark-excel"></i> Download  Excel
            </a>

          <a  href="{{route('export.pdf')}}" class="btn btn-danger btn-export btn-pdf">
                <i class="bi bi-file-earmark-pdf"></i> Download to PDF
          </a>

        </div>

        <div class="form-container">
            <h2 class="form-title">Student Information Form</h2>
            <form action="{{route('studentrecord.store')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label required-field">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label required-field">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="class" class="form-label required-field">Class</label>
                        <input type="text" name="class" class="form-control" id="class" placeholder="e.g. 10-A"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="roll_number" class="form-label required-field">Roll Number</label>
                        <input type="number" name="roll_number" class="form-control" id="roll_number" required>
                    </div>
                    <div class="col-md-4">
                        <label for="marks" class="form-label required-field">Marks</label>
                        <input type="number" name="marks" class="form-control" id="marks" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="gender"  class="form-label">Gender</label>
                        <select name="gender" class="form-select" id="gender">
                            <option selected disabled value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="dob">
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <button type="reset" class="btn btn-outline-secondary me-md-2">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- --}}
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        Swal.fire({
            title: '🎉 Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Great!',
            confirmButtonColor: '#3085d6',
            background: '#f0f8ff',
            backdrop: `
              rgba(30, 20, 60, 0.7)
            `,
        });
    </script>
    @endif

</body>

</html>