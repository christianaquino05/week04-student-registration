<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Records</title>

    <script src="https://cdn.tailwindcss.com"></script>

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

            <a
                href="{{ route('students.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-700"
            >
                Register Student
            </a>

        </div>
    </header>


    <!-- Main -->
    <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

            <div>
                <p class="text-sm font-semibold text-indigo-600">
                    Student Management
                </p>

                <h2 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                    Registered Students
                </h2>

                <p class="mt-2 text-sm text-slate-500">
                    View all successfully registered student records.
                </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                    Total Students
                </p>

                <p class="mt-1 text-2xl font-bold text-slate-900">
                    {{ $students->count() }}
                </p>
            </div>

        </div>


        <!-- Records Card -->
        <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            @if ($students->isEmpty())

                <!-- Empty State -->
                <div class="px-6 py-20 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="h-8 w-8"
                        >
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-slate-900">
                        No student records yet
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                        Registered students will appear here after a successful registration.
                    </p>

                    <a
                        href="{{ route('students.create') }}"
                        class="mt-6 inline-flex items-center justify-center rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700"
                    >
                        Register First Student
                    </a>

                </div>

            @else

                <div class="overflow-x-auto">

                    <table class="min-w-full divide-y divide-slate-200">

                        <thead class="bg-slate-50">

                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Student
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Student ID
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Program
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Year Level
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Email
                                </th>

                                <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wide text-slate-500">
                                    Action
                                </th>
                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-100 bg-white">

                            @foreach ($students as $student)

                                <tr class="transition hover:bg-slate-50">

                                    <!-- Student -->
                                    <td class="whitespace-nowrap px-6 py-5">

                                        <div class="flex items-center gap-4">

                                            <div class="h-12 w-12 shrink-0 overflow-hidden rounded-xl border border-slate-200 bg-slate-100">

                                                <img
                                                    src="{{ asset('storage/' . $student->profile_picture) }}"
                                                    alt="{{ $student->first_name }} {{ $student->last_name }}"
                                                    class="h-full w-full object-cover"
                                                >

                                            </div>

                                            <div>

                                                <p class="text-sm font-semibold text-slate-900">
                                                    {{ $student->first_name }}
                                                    {{ $student->middle_name }}
                                                    {{ $student->last_name }}
                                                </p>

                                                <p class="mt-1 text-xs text-slate-500">
                                                    Registered Student
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- Student ID -->
                                    <td class="whitespace-nowrap px-6 py-5 text-sm font-medium text-slate-700">
                                        {{ $student->student_id }}
                                    </td>


                                    <!-- Program -->
                                    <td class="px-6 py-5 text-sm text-slate-600">
                                        {{ $student->program }}
                                    </td>


                                    <!-- Year Level -->
                                    <td class="whitespace-nowrap px-6 py-5">

                                        <span class="inline-flex rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">
                                            {{ $student->year_level }}
                                        </span>

                                    </td>


                                    <!-- Email -->
                                    <td class="px-6 py-5 text-sm text-slate-600">
                                        {{ $student->email }}
                                    </td>


                                    <!-- Action -->
                                    <td class="whitespace-nowrap px-6 py-5 text-right">

                                        <a
                                            href="{{ route('students.show', $student) }}"
                                            class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2 text-xs font-semibold text-slate-700 transition hover:border-indigo-200 hover:bg-indigo-50 hover:text-indigo-700"
                                        >
                                            View Profile

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                class="h-3.5 w-3.5"
                                            >
                                                <path d="m9 18 6-6-6-6"/>
                                            </svg>

                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @endif

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