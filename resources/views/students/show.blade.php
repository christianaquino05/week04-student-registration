<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

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
    <main class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8">


        <!-- Success Flash -->
        @if (session('success'))

            <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-5">

                <div class="flex items-start gap-3">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            class="h-5 w-5"
                        >
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-semibold text-green-800">
                            Registration Successful
                        </p>

                        <p class="mt-1 text-sm text-green-700">
                            {{ session('success') }}
                        </p>

                    </div>

                </div>

            </div>

        @endif


        <!-- Profile Card -->
        <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">


            <!-- Profile Header -->
            <div class="bg-indigo-600 px-6 py-10 sm:px-10">

                <div class="flex flex-col items-center gap-6 text-center sm:flex-row sm:text-left">


                    <!-- Profile Picture -->
                    <div class="h-32 w-32 shrink-0 overflow-hidden rounded-3xl border-4 border-white bg-white shadow-md">

                        <img
                            src="{{ asset('storage/' . $student->profile_picture) }}"
                            alt="{{ $student->first_name }} {{ $student->last_name }}"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    <!-- Name -->
                    <div class="text-white">

                        <p class="text-sm font-semibold text-indigo-100">
                            Registered Student
                        </p>

                        <h2 class="mt-1 text-3xl font-bold tracking-tight">

                            {{ $student->first_name }}

                            @if ($student->middle_name)
                                {{ $student->middle_name }}
                            @endif

                            {{ $student->last_name }}

                        </h2>

                        <p class="mt-2 text-sm text-indigo-100">
                            Student ID: {{ $student->student_id }}
                        </p>


                        <div class="mt-4 inline-flex rounded-full bg-white/15 px-4 py-1.5 text-xs font-semibold">

                            {{ $student->program }}
                            ·
                            {{ $student->year_level }}

                        </div>

                    </div>

                </div>

            </div>


            <!-- Details -->
            <div class="p-6 sm:p-10">


                <!-- Section 1 -->
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
                                Student identity and contact details
                            </p>

                        </div>

                    </div>


                    <div class="grid gap-5 md:grid-cols-2">


                        <!-- Student ID -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Student ID
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->student_id }}
                            </p>

                        </div>


                        <!-- Email -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Email Address
                            </p>

                            <p class="mt-2 break-all text-sm font-semibold text-slate-800">
                                {{ $student->email }}
                            </p>

                        </div>


                        <!-- First Name -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                First Name
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->first_name }}
                            </p>

                        </div>


                        <!-- Middle Name -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Middle Name
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->middle_name ?: 'N/A' }}
                            </p>

                        </div>


                        <!-- Last Name -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Last Name
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->last_name }}
                            </p>

                        </div>


                        <!-- Mobile -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Mobile Number
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->mobile_number }}
                            </p>

                        </div>


                        <!-- Birth Date -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Date of Birth
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->date_of_birth }}
                            </p>

                        </div>


                        <!-- Gender -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Gender
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->gender }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Divider -->
                <div class="my-9 border-t border-slate-200"></div>


                <!-- Academic Information -->
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
                                Program and current year level
                            </p>

                        </div>

                    </div>


                    <div class="grid gap-5 md:grid-cols-2">


                        <!-- Program -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Program
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->program }}
                            </p>

                        </div>


                        <!-- Year -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Year Level
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-800">
                                {{ $student->year_level }}
                            </p>

                        </div>


                        <!-- Address -->
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 md:col-span-2">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Complete Address
                            </p>

                            <p class="mt-2 text-sm font-semibold leading-6 text-slate-800">
                                {{ $student->address }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Actions -->
                <div class="mt-9 flex flex-col gap-3 border-t border-slate-200 pt-7 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-700">
                            Registration completed
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Your student information has been saved successfully.
                        </p>

                    </div>


                    <a
                        href="{{ route('students.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-bold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-100"
                    >

                        Register Another Student

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            class="h-4 w-4"
                        >
                            <path d="M12 5v14"/>
                            <path d="M5 12h14"/>
                        </svg>

                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="mt-12 border-t border-slate-200 bg-white">

        <div class="mx-auto max-w-7xl px-6 py-6 text-center text-xs text-slate-500">
            ITST 302 – Client-Server Technologies · Student Registration System
        </div>

    </footer>

</body>
</html>