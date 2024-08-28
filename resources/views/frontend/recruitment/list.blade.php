<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEPISAT 6th Gen - Registration</title>
    <link rel="icon"
        href="https://d33wubrfki0l68.cloudfront.net/9c80d635033669c5a01e07bad6ad4216eb6d28d6/d3243/asset/eepisat.png"
        type="image/gif">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .anton-regular {
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
        }


        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #FF8000;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #FF8000;
        }

        .bg-eepisat-blue {
            background-color: #334D80;
        }

        .bg-eepisat-light-blue {
            background-color: #586F97;
        }

        .bg-eepisat-lighter-blue {
            background-color: #6B93D0;
        }

        .bg-eepisat-yellow {
            background-color: #FDB140;
        }

        .form-page {
            display: none;
        }

        .form-page.active {
            display: block;
        }

        footer {
            height: 80px;
            /* Adjust the height as needed */
            overflow: hidden;
        }

        .marquee {
            display: flex;
            gap: 4px;
            /* Adjust the gap between images */
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .hidden {
            display: none;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-100"
    style="background-image: url('https://ik.imagekit.io/eepisat/BG-Registration.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <main class="flex-grow mx-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-8">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold leading-tight">Registrations List</h2>
                </div>
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Full Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        NRP
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        No Hp
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Jurusan
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tahun Angkatan
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Divisi
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Essay Team Work Engage
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Essay Goals and Contribute
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Essay Achievement
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Essay Solution to Difficult
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        CV
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Portfolio
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Motivation Letter
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        MBTI
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        MBTI Image
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Medical Record
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Owned Device
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Class Finish Hour
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Parental Consent
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Registration Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $loop->index + 1 }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->fullname }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->email }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->nrp }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                @php
                                                    // Replace the first '0' with '62'
                                                    $waNumber = '62' . substr($registration->no_hp, 1);
                                                @endphp
                                                <a target="_blank"
                                                    href="https://wa.me/{{ $waNumber }}">{{ $registration->no_hp }}</a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->jurusan }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->years }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->divisi }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ mb_strimwidth($registration->team_work_engage, 0, 10, '....') }}
                                                <a href="javascript:void(0);"
                                                    onclick="openTextModal(`{{ $registration->team_work_engage }}`)"
                                                    class="text-indigo-600 hover:text-indigo-900">Read More</a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ mb_strimwidth($registration->goals_and_contribute, 0, 10, '....') }}
                                                <a href="javascript:void(0);"
                                                    onclick="openTextModal(`{{ $registration->goals_and_contribute }}`)"
                                                    class="text-indigo-600 hover:text-indigo-900">Read More</a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ mb_strimwidth($registration->achievement, 0, 10, '....') }}
                                                <a href="javascript:void(0);"
                                                    onclick="openTextModal(`{{ $registration->achievement }}`)"
                                                    class="text-indigo-600 hover:text-indigo-900">Read More</a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ mb_strimwidth($registration->solutions_to_difficult, 0, 10, '....') }}
                                                <a href="javascript:void(0);"
                                                    onclick="openTextModal(`{{ $registration->solutions_to_difficult }}`)"
                                                    class="text-indigo-600 hover:text-indigo-900">Read More</a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="javascript:void(0);"
                                                    onclick="openModal('{{ $registration->cv }}')"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View CV
                                                </a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="javascript:void(0);"
                                                    onclick="openModal('{{ $registration->portfolio }}')"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View Portfolio
                                                </a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="javascript:void(0);"
                                                    onclick="openModal('{{ $registration->motivation_letter }}')"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View Motivation Letter
                                                </a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $registration->mbti }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="javascript:void(0);"
                                                    onclick="openImageModal('{{ $registration->mbti_image }}')"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View Image
                                                </a>
                                            </p>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $registration->medical_record }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $registration->owned_device }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $registration->class_finish_hour }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <a href="javascript:void(0);"
                                                    onclick="openModal('{{ $registration->parental_consent }}')"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View Parental Consent
                                                </a>
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $registration->created_at }}
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col sm:flex-row items-center sm:justify-between">
                            <span class="text-xs sm:text-sm text-gray-900">
                                Showing {{ $registrations->firstItem() }} to {{ $registrations->lastItem() }} of
                                {{ $registrations->total() }} Entries
                            </span>
                            <div class="mt-2 sm:mt-0">
                                {{ $registrations->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="pdfModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl">
                    <div class="flex justify-between items-center p-4 border-b">
                        <h3 class="text-lg font-semibold">PDF Viewer</h3>
                        <button onclick="closeModal()" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <div class="p-4">
                        <embed id="pdfViewer" src="" type="application/pdf" width="100%" height="500px">
                    </div>
                </div>
            </div>
        </div>
        <!-- Text Modal -->
        <div id="textModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl">
                    <div class="flex justify-between items-center p-4 border-b">
                        <h3 class="text-lg font-semibold">Detail</h3>
                        <button onclick="closeTextModal()" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <div class="p-4">
                        <p id="modalText" class="text-gray-900"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Modal -->
        <div id="imageModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl">
                    <div class="flex justify-between items-center p-4 border-b">
                        <h3 class="text-lg font-semibold">Image Preview</h3>
                        <button onclick="closeImageModal()" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <div class="p-4 flex justify-center">
                        <img id="modalImage" src="" alt="Image" class="rounded-lg max-w-full h-auto">
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openModal(pdfUrl) {
                document.getElementById('pdfViewer').src = pdfUrl;
                document.getElementById('pdfModal').classList.remove('hidden');
                addModalListeners('pdfModal');
            }

            function closeModal() {
                document.getElementById('pdfViewer').src = ""; // Clear the src to stop loading the PDF
                document.getElementById('pdfModal').classList.add('hidden');
                removeModalListeners('pdfModal');
            }

            function openTextModal(text) {
                document.getElementById('modalText').innerText = text;
                document.getElementById('textModal').classList.remove('hidden');
                addModalListeners('textModal');
            }

            function closeTextModal() {
                document.getElementById('textModal').classList.add('hidden');
                removeModalListeners('textModal');
            }

            function openImageModal(imageUrl) {
                document.getElementById('modalImage').src = imageUrl;
                document.getElementById('imageModal').classList.remove('hidden');
                addModalListeners('imageModal');
            }

            function closeImageModal() {
                document.getElementById('imageModal').classList.add('hidden');
                removeModalListeners('imageModal');
            }

            function addModalListeners(modalId) {
                document.addEventListener('keydown', handleEscKey);
                document.getElementById(modalId).addEventListener('click', handleOutsideClick);
            }

            function removeModalListeners(modalId) {
                document.removeEventListener('keydown', handleEscKey);
                document.getElementById(modalId).removeEventListener('click', handleOutsideClick);
            }

            function handleEscKey(event) {
                if (event.key === 'Escape') {
                    closeAllModals();
                }
            }

            function handleOutsideClick(event) {
                if (event.target.classList.contains('modal')) {
                    closeAllModals();
                }
            }

            function closeAllModals() {
                closeModal();
                closeTextModal();
                closeImageModal();
            }
        </script>
</body>

</html>
