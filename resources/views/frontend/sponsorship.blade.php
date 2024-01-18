@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleSponsorships.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleSponsorships.min.css') }}">
        @endif
    @endpush
    <main data-aos="fade-up">
        <div class="title">
            <h1>Sponsorship Plans</h1>
            <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
            <p>Benefit & Pricing can be seen in the table below</p>
        </div>
        <div class="sponsorship-table">
            <div class="flex">
                <a href="https://drive.google.com/file/d/15qREp1sBH4HrSUJS2LNSCM6NanxUSq3N/view" target="_blank">
                    <div class="flex flex-row items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>
                            Download Sponsorship Proposal
                        </span>
                    </div>
                </a>
            </div>
            <div class="table-android">
                <section>
                    <table class="w-full">
                        <!---->
                        <thead>
                            <tr>
                                <th scope="col" class="sr-only">
                                    Benefit
                                </th>
                                <th scope="col" class="sr-only">
                                    Included
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Flexible Logo and Name Size
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-green">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in CanSat
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-green">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in PDR, CDR, PFR, FRR Presentation
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-green">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Video Profile
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Daily Activity and After Movie
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Bumper Video
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Website
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Polo Shirt
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Placard
                                </th>
                                <td class="td-pricing">L</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="pricing">
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing"
                                    class="py-5 px-4 text-sm font-medium text-gray-900  text-left">
                                    Pricing
                                </th>
                                <td class="td-pricing-info"><span>85.000.000
                                        IDR</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-pricing"><a href="/contact?subject=Apply For Platinum Sponsorship">Buy
                            Platinum</a></div>
                </section>
                <section>
                    <table class="w-full">
                        <!---->
                        <thead>
                            <tr>
                                <th scope="col" class="sr-only">
                                    Benefit
                                </th>
                                <th scope="col" class="sr-only">
                                    Included
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Flexible Logo and Name Size
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in CanSat
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in PDR, CDR, PFR, FRR Presentation
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Video Profile
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Daily Activity and After Movie
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Bumper Video
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Website
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Polo Shirt
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Placard
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="pricing">
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing"
                                    class="py-5 px-4 text-sm font-medium text-gray-900  text-left">
                                    Pricing
                                </th>
                                <td class="td-pricing-info"><span>70.000.000
                                        IDR</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-pricing"><a href="/contact?subject=Apply For Diamond Sponsorship">Buy
                            Diamond</a></div>
                </section>
                <section>
                    <table class="w-full">
                        <!---->
                        <thead>
                            <tr>
                                <th scope="col" class="sr-only">
                                    Benefit
                                </th>
                                <th scope="col" class="sr-only">
                                    Included
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Flexible Logo and Name Size
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in CanSat
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in PDR, CDR, PFR, FRR Presentation
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Video Profile
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Daily Activity and After Movie
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Bumper Video
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Website
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Polo Shirt
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Placard
                                </th>
                                <td class="td-pricing">M</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="pricing">
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing"
                                    class="py-5 px-4 text-sm font-medium text-gray-900  text-left">
                                    Pricing
                                </th>
                                <td class="td-pricing-info"><span>40.000.000
                                        IDR</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-pricing"><a href="/contact?subject=Apply For Gold Sponsorship">Buy
                            Gold</a></div>
                </section>
                <section>
                    <table class="w-full">
                        <!---->
                        <thead>
                            <tr>
                                <th scope="col" class="sr-only">
                                    Benefit
                                </th>
                                <th scope="col" class="sr-only">
                                    Included
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Flexible Logo and Name Size
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in CanSat
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in PDR, CDR, PFR, FRR Presentation
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Video Profile
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Daily Activity and After Movie
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Bumper Video
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Website
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Polo Shirt
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Placard
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="pricing">
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing"
                                    class="py-5 px-4 text-sm font-medium text-gray-900  text-left">
                                    Pricing
                                </th>
                                <td class="td-pricing-info"><span>25.000.000
                                        IDR</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-pricing"><a href="/contact?subject=Apply For Silver Sponsorship">Buy
                            Silver</a></div>
                </section>
                <section>
                    <table class="w-full">
                        <!---->
                        <thead>
                            <tr>
                                <th scope="col" class="sr-only">
                                    Benefit
                                </th>
                                <th scope="col" class="sr-only">
                                    Included
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Flexible Logo and Name Size
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in CanSat
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in PDR, CDR, PFR, FRR Presentation
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Video Profile
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Daily Activity and After Movie
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Bumper Video
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Website
                                </th>
                                <td class="td-pricing"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Polo Shirt
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Logo in Placard
                                </th>
                                <td class="td-pricing">S</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="pricing">
                        <tbody>
                            <tr>
                                <th scope="row" class="th-pricing">
                                    Pricing
                                </th>
                                <td class="td-pricing-info"><span>20.000.000
                                        IDR</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-pricing"><a href="/contact?subject=Apply For Bronze Sponsorship">Buy
                            Bronze</a></div>
                </section>
            </div>
            <div class="table-desktop">
                <table>
                    <caption class="sr-only">
                        Pricing plan comparison
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">
                                {{-- <span
									class="sr-only">
									Feature by
								</span>  --}}
                                Plans</th>
                            <th scope="col" style="text-align:center;">
                                Platinum
                            </th>
                            <th scope="col" style="text-align:center;">
                                Diamond
                            </th>
                            <th scope="col" style="text-align:center;">
                                Gold
                            </th>
                            <th scope="col" style="text-align:center;">
                                Silver
                            </th>
                            <th scope="col" style="text-align:center;">
                                Bronze
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!---->
                        <tr>
                            <th scope="row" class="th-pricing">
                                Flexible Logo and Name Size
                            </th>
                            <td
                                style="padding-top:1.25rem;padding-bottom:1.25rem;padding-left:1.5rem;padding-right:1.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-green">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in CanSat
                            </th>
                            <td
                                style="padding-top:1.25rem;padding-bottom:1.25rem;padding-left:1.5rem;padding-right:1.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-green">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in PDR, CDR, PFR, FRR Presentation
                            </th>
                            <td
                                style="padding-top:1.25rem;padding-bottom:1.25rem;padding-left:1.5rem;padding-right:1.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-green">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Video Profile
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Daily Activity and After Movie
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Bumper Video
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>S</span></td>
                            <td style="text-align: center"><span>S</span></td>
                            <td style="text-align: center"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Website
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>S</span></td>
                            <td style="text-align: center"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    viewBox="0 0 20 20" fill="currentColor" class="svg-grey">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Polo Shirt
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>S</span></td>
                            <td style="text-align: center"><span>S</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th-pricing">
                                Logo in Placard
                            </th>
                            <td style="text-align: center"><span>L</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>M</span></td>
                            <td style="text-align: center"><span>S</span></td>
                            <td style="text-align: center"><span>S</span></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Pricing
                            </th>
                            <td class="td-pricing">
                                <div class="pricing">
                                    <p><span class="text-3xl font-extrabold text-gray-800">85.000.000 IDR</span></p>
                                    <a href="/contact?subject=Apply Platinum Sponsorship EEPISAT">Apply
                                        Platinum</a>
                                </div>
                            </td>
                            <td class="td-pricing">
                                <div class="pricing">
                                    <p><span class="text-3xl font-extrabold text-gray-800">70.000.000 IDR</span></p>
                                    <a href="/contact?subject=Apply Diamond Sponsorship EEPISAT">Apply
                                        Diamond</a>
                                </div>
                            </td>
                            <td class="td-pricing">
                                <div class="pricing">
                                    <p><span class="text-3xl font-extrabold text-gray-800">40.000.000 IDR</span></p>
                                    <a href="/contact?subject=Apply Gold Sponsorship EEPISAT">Apply
                                        Gold</a>
                                </div>
                            </td>
                            <td class="td-pricing">
                                <div class="pricing">
                                    <p><span class="text-3xl font-extrabold text-gray-800">25.000.000 IDR</span></p>
                                    <a href="/contact?subject=Apply Silver Sponsorship EEPISAT">Apply
                                        Silver</a>
                                </div>
                            </td>
                            <td class="td-pricing">
                                <div class="pricing">
                                    <p><span class="text-3xl font-extrabold text-gray-800">20.000.000 IDR</span></p>
                                    <a href="/contact?subject=Apply Bronze Sponsorship EEPISAT">Apply
                                        Bronze</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="prospect-benefit">
            <div class="info">
                <div class="info-body">
                    <h2 class="title">
                        Prospect &amp; Benefit
                    </h2>
                    <p class="subtitle">
                        Sponsor Prospect &amp; Benefit
                    </p>
                    <div class="info-list">
                        <p class="text"><span class="text-title">Branding.</span> It is an opportunity to appeal that
                            your
                            company is technology-oriented organization. The posting of the logo will be recorded by movie
                            and will be broadcasted on the web-media afterwards, leading to branding of the company and
                            products. Continuous exposure of names and logos of companies, products, and services can
                            generate many merits even after this competition, such as appeal to students, public, topicality
                            and
                            exciting experience.
                        </p>
                        <p class="text"><span class="text-title">Marketing.</span> It is a great chance to advertise
                            your
                            products and introduce detailed usages directly to Aerospace engineers, Aerospace enthusiast,
                            and Students.
                        </p>
                        <p class="text"><span class="text-title">Visibility.</span> The competition is the place to be
                            seen and our team member is a walking ads. After our prototyping is completed we will be
                            presenting our CanSat into an Official Launch Event to tell public that our CanSat is ready to
                            launch. Your products ads can be seen while the event and your logo is publicly seen from
                            physically like polo shirt or digitally in our social media.
                        </p>
                        <p class="text"><span class="text-title">Audience.</span> CanSat Competition's ever diversifying
                            audience puts
                            your organization in front of a wide variety of people internationally. From beginners to
                            experts, students
                            to researchers, CanSat Competition draws attendees from all sorts of places.
                        </p>
                        <p class="text"><span class="text-title">Flexibility.</span> If you want to help Bamantara
                            EEPISAT, we want to
                            help you provide several packages and can be customised to fulfil company needs
                        </p>
                        <p class="text"><span class="text-title">Other.</span> Sponsoring can show your company
                            gratitude for research in
                            Aerospace Industry and Education. It is one of CSR activity that supports students to growth and
                            make an impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsors">
            <div class="supported-by">
                <h3 class="text-supported-by">Supported By</h3>
                <div class="img-wrap">
                    <div class="img-flex">
                        <div class="img-col">
                            <img src="https://ik.imagekit.io/eepisat/asset/pens.png?updatedAt=1681052332488"
                                alt="PENS">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sponsor-info">
                <h3 class="text-sponsor-info">
                    Sponsors
                </h3>
                <p class="paragraph-sponsor-info">Bamantara EEPISAT gratefully acknowledges the generosity of sponsor
                    contribution in our research. <br>
                    Their support, along with that of our members, helps make it possible to accomplish all that we do.</p>
            </div>
            <div class="sponsor-list" id="sponsor-platinum">
                <h3>Platinum Sponsors</h3>
                {{-- <div class="img-wrap">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 20 20"
                                    fill="currentColor" class="svg-grey" style="display: block;">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
					clip-rule="evenodd"></path></svg>
				</div> --}}
            </div>
            <div class="sponsor-list" id="sponsor-diamond">
                <h3>Diamond Sponsors</h3>
            </div>
            <div class="sponsor-list" id="sponsor-gold">
                <h3>Gold Sponsors</h3>
            </div>
            <div class="sponsor-list" id="sponsor-silver">
                <h3>Silver Sponsors</h3>
            </div>
        </div>
    </main>
    @include('shared.frontend_footer')
@endsection
