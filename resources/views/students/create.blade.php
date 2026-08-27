<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-slate-50 text-slate-900">

    <!-- Header -->
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-600 text-white">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        class="h-6 w-6"
                    >
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>

                <div>
                    <h1 class="text-base font-bold text-slate-900">
                        College of Information Technology
                    </h1>
                    <p class="text-xs text-slate-500">
                        Student Registration Portal
                    </p>
                </div>
            </div>

            <div class="hidden text-right sm:block">
                <p class="text-sm font-semibold text-slate-700">
                    ITST 302
                </p>

                <p class="text-xs text-slate-500">
                    Client-Server Technologies
                </p>
            </div>

        </div>
    </header>


    <!-- Main -->
    <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-[0.75fr_2fr]">

            <!-- LEFT INFORMATION PANEL -->
            <aside>
                <div class="sticky top-6 overflow-hidden rounded-3xl bg-indigo-600 p-7 text-white shadow-sm">

                    <div class="mb-8">
                        <span class="inline-flex rounded-full bg-white/15 px-3 py-1 text-xs font-semibold">
                            New Student Registration
                        </span>

                        <h2 class="mt-5 text-3xl font-bold leading-tight">
                            Start your student registration.
                        </h2>

                        <p class="mt-4 text-sm leading-6 text-indigo-100">
                            Complete the form with accurate and valid information.
                            Required fields must be filled before submitting your registration.
                        </p>
                    </div>

                    <div class="space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/15">
                                01
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Personal Information
                                </p>

                                <p class="mt-1 text-xs leading-5 text-indigo-100">
                                    Provide your identity and contact details.
                                </p>
                            </div>
                        </div>


                        <div class="flex gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/15">
                                02
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Academic Information
                                </p>

                                <p class="mt-1 text-xs leading-5 text-indigo-100">
                                    Select your program and current year level.
                                </p>
                            </div>
                        </div>


                        <div class="flex gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/15">
                                03
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Profile Picture
                                </p>

                                <p class="mt-1 text-xs leading-5 text-indigo-100">
                                    Upload a clear JPG, JPEG, or PNG image.
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="mt-10 border-t border-white/20 pt-6">
                        <p class="text-xs leading-5 text-indigo-100">
                            Please review your information carefully before submitting.
                        </p>
                    </div>

                </div>
            </aside>


            <!-- REGISTRATION FORM -->
            <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                <!-- Form Header -->
                <div class="border-b border-slate-200 px-6 py-7 sm:px-8">

                    <p class="text-sm font-semibold text-indigo-600">
                        Registration Form
                    </p>

                    <h2 class="mt-1 text-2xl font-bold tracking-tight text-slate-900">
                        Student Information
                    </h2>

                    <p class="mt-2 text-sm text-slate-500">
                        Fields marked with
                        <span class="font-semibold text-red-500">*</span>
                        are required.
                    </p>

                </div>


                <!-- Validation Error Summary -->
                 @if (session('validation_success'))
                    <div class="mx-6 mt-6 rounded-2xl border border-green-200 bg-green-50 p-5 sm:mx-8">
                        <div class="flex items-center gap-3">

                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-green-100 text-green-600">
                                ✓
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-green-800">
                                    Validation Successful
                                </p>

                                <p class="mt-1 text-sm text-green-700">
                                    {{ session('validation_success') }}
                                </p>
                            </div>

                        </div>
                    </div>
                @endif
                
                @if ($errors->any())
                    <div class="mx-6 mt-6 rounded-2xl border border-red-200 bg-red-50 p-5 sm:mx-8">

                        <div class="flex gap-3">

                            <div class="mt-0.5 text-red-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    class="h-5 w-5"
                                >
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" x2="12" y1="8" y2="12"/>
                                    <line x1="12" x2="12.01" y1="16" y2="16"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-red-800">
                                    Please correct the following errors:
                                </p>

                                <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-red-700">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>
                @endif


                <form
                    action="{{ route('students.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="p-6 sm:p-8"
                >
                    @csrf


                    <!-- PERSONAL INFORMATION -->
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-600">
                                1
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Personal Information
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Basic identity and contact information
                                </p>
                            </div>

                        </div>


                        <div class="grid gap-5 md:grid-cols-2">

                            <!-- Student ID -->
                            <div>
                                <label for="student_id" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Student ID
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="student_id"
                                    name="student_id"
                                    value="{{ old('student_id') }}"
                                    placeholder="e.g. 2026-00001"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('student_id') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('student_id')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Email -->
                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Email Address
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="student@example.com"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('email') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('email')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- First Name -->
                            <div>
                                <label for="first_name" class="mb-2 block text-sm font-semibold text-slate-700">
                                    First Name
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    placeholder="Enter first name"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('first_name') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('first_name')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Middle Name -->
                            <div>
                                <label for="middle_name" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Middle Name
                                    <span class="font-normal text-slate-400">(Optional)</span>
                                </label>

                                <input
                                    type="text"
                                    id="middle_name"
                                    name="middle_name"
                                    value="{{ old('middle_name') }}"
                                    placeholder="Enter middle name"
                                    class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >
                            </div>


                            <!-- Last Name -->
                            <div>
                                <label for="last_name" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Last Name
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    placeholder="Enter last name"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('last_name') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('last_name')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Mobile Number -->
                            <div>
                                <label for="mobile_number" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Mobile Number
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="mobile_number"
                                    name="mobile_number"
                                    value="{{ old('mobile_number') }}"
                                    placeholder="09XXXXXXXXX"
                                    inputmode="numeric"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('mobile_number') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('mobile_number')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Date of Birth -->
                            <div>
                                <label for="date_of_birth" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Date of Birth
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="date"
                                    id="date_of_birth"
                                    name="date_of_birth"
                                    value="{{ old('date_of_birth') }}"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('date_of_birth') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >

                                @error('date_of_birth')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Gender -->
                            <div>
                                <label for="gender" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Gender
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    id="gender"
                                    name="gender"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('gender') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >
                                    <option value="">Select gender</option>

                                    <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>
                                        Male
                                    </option>

                                    <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>
                                        Female
                                    </option>

                                    <option value="Prefer not to say" {{ old('gender') === 'Prefer not to say' ? 'selected' : '' }}>
                                        Prefer not to say
                                    </option>
                                </select>

                                @error('gender')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <!-- DIVIDER -->
                    <div class="my-9 border-t border-slate-200"></div>


                    <!-- ACADEMIC INFORMATION -->
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-600">
                                2
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Academic Information
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Program and year level
                                </p>
                            </div>

                        </div>


                        <div class="grid gap-5 md:grid-cols-2">

                            <!-- Program -->
                            <div>
                                <label for="program" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Program
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    id="program"
                                    name="program"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('program') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >
                                    <option value="">Select program</option>

                                    <option value="BS Information Technology"
                                        {{ old('program') === 'BS Information Technology' ? 'selected' : '' }}>
                                        BS Information Technology
                                    </option>

                                    <option value="BS Computer Science"
                                        {{ old('program') === 'BS Computer Science' ? 'selected' : '' }}>
                                        BS Computer Science
                                    </option>

                                    <option value="BS Information Systems"
                                        {{ old('program') === 'BS Information Systems' ? 'selected' : '' }}>
                                        BS Information Systems
                                    </option>
                                </select>

                                @error('program')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Year Level -->
                            <div>
                                <label for="year_level" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Year Level
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    id="year_level"
                                    name="year_level"
                                    class="w-full rounded-xl border
                                    {{ $errors->has('year_level') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >
                                    <option value="">Select year level</option>

                                    <option value="1st Year" {{ old('year_level') === '1st Year' ? 'selected' : '' }}>
                                        1st Year
                                    </option>

                                    <option value="2nd Year" {{ old('year_level') === '2nd Year' ? 'selected' : '' }}>
                                        2nd Year
                                    </option>

                                    <option value="3rd Year" {{ old('year_level') === '3rd Year' ? 'selected' : '' }}>
                                        3rd Year
                                    </option>

                                    <option value="4th Year" {{ old('year_level') === '4th Year' ? 'selected' : '' }}>
                                        4th Year
                                    </option>
                                </select>

                                @error('year_level')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <!-- Address -->
                            <div class="md:col-span-2">

                                <label for="address" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Complete Address
                                    <span class="text-red-500">*</span>
                                </label>

                                <textarea
                                    id="address"
                                    name="address"
                                    rows="4"
                                    placeholder="House number, street, barangay, city/municipality, province"
                                    class="w-full resize-none rounded-xl border
                                    {{ $errors->has('address') ? 'border-red-400' : 'border-slate-300' }}
                                    bg-white px-4 py-3 text-sm outline-none transition
                                    focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                                >{{ old('address') }}</textarea>

                                @error('address')
                                    <p class="mt-1.5 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>
                    </div>


                    <!-- DIVIDER -->
                    <div class="my-9 border-t border-slate-200"></div>


                    <!-- PROFILE PICTURE -->
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-600">
                                3
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Profile Picture
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Upload a clear student profile image
                                </p>
                            </div>

                        </div>


                        <div class="rounded-2xl border-2 border-dashed
                            {{ $errors->has('profile_picture') ? 'border-red-300 bg-red-50' : 'border-slate-300 bg-slate-50' }}
                            p-6">

                            <div class="flex flex-col gap-5 sm:flex-row sm:items-center">

                                <!-- Image Preview -->
                                <div
                                    id="imagePreviewContainer"
                                    class="flex h-24 w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl border border-slate-200 bg-white"
                                >

                                    <svg
                                        id="defaultProfileIcon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        class="h-10 w-10 text-slate-400"
                                    >
                                        <path d="M20 21a8 8 0 0 0-16 0"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>

                                    <img
                                        id="imagePreview"
                                        src=""
                                        alt="Profile preview"
                                        class="hidden h-full w-full object-cover"
                                    >

                                </div>


                                <div class="flex-1">

                                    <label
                                        for="profile_picture"
                                        class="inline-flex cursor-pointer items-center justify-center rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800"
                                    >
                                        Choose Profile Picture
                                    </label>

                                    <input
                                        type="file"
                                        id="profile_picture"
                                        name="profile_picture"
                                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                        class="hidden"
                                    >

                                    <p id="fileName" class="mt-3 text-sm text-slate-500">
                                        No file selected
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        JPG, JPEG, or PNG. Maximum file size: 2 MB.
                                    </p>

                                    @error('profile_picture')
                                        <p class="mt-2 text-xs font-medium text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Submit Area -->
                    <div class="mt-9 flex flex-col-reverse gap-3 border-t border-slate-200 pt-7 sm:flex-row sm:items-center sm:justify-between">

                        <p class="text-xs leading-5 text-slate-500">
                            By submitting, you confirm that the information provided is accurate.
                        </p>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-7 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-100"
                        >
                            Submit Registration

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                class="h-4 w-4"
                            >
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </button>

                    </div>

                </form>

            </section>

        </div>
    </main>


    <!-- Footer -->
    <footer class="mt-12 border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-6 text-center text-xs text-slate-500">
            ITST 302 – Client-Server Technologies · Student Registration System
        </div>
    </footer>


    <!-- Profile Image Preview -->
    <script>
        const profileInput = document.getElementById('profile_picture');
        const imagePreview = document.getElementById('imagePreview');
        const defaultProfileIcon = document.getElementById('defaultProfileIcon');
        const fileName = document.getElementById('fileName');

        profileInput.addEventListener('change', function (event) {

            const file = event.target.files[0];

            if (!file) {
                imagePreview.src = '';
                imagePreview.classList.add('hidden');

                defaultProfileIcon.classList.remove('hidden');

                fileName.textContent = 'No file selected';

                return;
            }

            fileName.textContent = file.name;

            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;

                imagePreview.classList.remove('hidden');

                defaultProfileIcon.classList.add('hidden');
            };

            reader.readAsDataURL(file);
        });
    </script>

</body>
</html>