@extends('layout')

@section('content')

    @php
        $team = [

            /*
            |--------------------------------------------------------------------------
            | Director
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Director',
                'name' => 'Dr. Gilbert Tostevin',
                'description' => '
                    Professor<br>
                    Department of Anthropology<br>
                    University of Minnesota<br>
                    Minneapolis, MN, USA<br>
                    <a href="mailto:toste003@umn.edu">toste003@umn.edu</a>
                ',
                'image' => 'Gil 2019 cropped.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Co-Director
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Co-Director',
                'name' => 'Dr. Gilliane Monnier',
                'description' => '
                    Professor<br>
                    Department of Anthropology<br>
                    University of Minnesota<br>
                    Minneapolis, MN, USA<br>
                    <a href="mailto:monni003@umn.edu">monni003@umn.edu</a>
                ',
                'image' => 'Gilliane 20210729_104550.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Lead Archaeologists
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Lead Archaeologist',
                'name' => 'Mr. Nikola Borovinić',
                'description' => '
                    Center for Conservation and Archaeology<br>
                    Ministry of Culture<br>
                    Cetinje, Montenegro
                ',
                'image' => 'Nikola 20210729_145218-compressed.jpg',
            ],

            [
                'role' => 'Lead Archaeologist',
                'name' => 'Mr. Mile Baković',
                'description' => '
                    Center for Conservation and Archaeology<br>
                    Ministry of Culture<br>
                    Cetinje, Montenegro
                ',
                'image' => 'mile-test.png',
            ],

            /*
            |--------------------------------------------------------------------------
            | Zooarchaeologist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Zooarchaeologist',
                'name' => 'Dr. Eugène Morin',
                'description' => '
                    Professor<br>
                    Department of Anthropology<br>
                    Trent University<br>
                    Peterborough, ON, Canada
                ',
                'image' => 'Eugene Morin.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Geo-archaeologist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Geo-archaeologist',
                'name' => 'Dr. Carolina Mallol',
                'description' => '
                    Researcher and Lecturer<br>
                    Departamento de Geografía e Historia<br>
                    Universidad de la Laguna<br>
                    Tenerife, Spain
                ',
                'image' => 'Carolina Mallol.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Radiocarbon Dating Specialist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Radiocarbon dating specialist',
                'name' => 'Dr. Elisabetta Boaretto',
                'description' => '
                    Director<br>
                    Kimmel Center for Archaeological Science<br>
                    Weizmann Institute of Science<br>
                    Rehovot, Israel
                ',
                'image' => 'Elisabetta 20180727_085150.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Biological Anthropologists
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Biological anthropologist',
                'name' => 'Dr. Isabelle Crevecoeur',
                'description' => '
                    Senior researcher at CNRS<br>
                    Université de Bordeaux<br>
                    Pessac, France
                ',
                'image' => 'Isabelle Crevecoeur profile.jpg',
            ],

            [
                'role' => 'Biological anthropologist',
                'name' => 'Dr. Hélène Rougier',
                'description' => '
                    Professor<br>
                    Department of Anthropology<br>
                    California State University Northridge<br>
                    Northridge, CA, USA
                ',
                'image' => 'Helene Rougier profile.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Zooarchaeologists - Microfauna
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Zooarchaeologist (microfauna)',
                'name' => 'Dr. Miriam Belmaker',
                'description' => '
                    Associate Professor<br>
                    Department of Anthropology and Sociology<br>
                    University of Tulsa<br>
                    Tulsa, Oklahoma, USA
                ',
                'image' => 'Belmaker picking.jpeg',
            ],

            [
                'role' => 'Zooarchaeologist (microfauna)',
                'name' => 'Dr. Katarina Bogićević',
                'description' => '
                    Professor<br>
                    Faculty of Mining and Geology<br>
                    University of Belgrade<br>
                    Belgrade, Serbia
                ',
                'image' => 'Katarina Bogicevic official photo.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Archaeomagnetism Specialist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Archaeomagnetism specialist',
                'name' => 'Dr. Ángel Carrancho Alonso',
                'description' => '
                    Associate Professor<br>
                    Area of Prehistory<br>
                    Dept. of History, Geography and Communication<br>
                    University of Burgos<br>
                    Burgos, Spain
                ',
                'image' => 'Angel Carrancho sampling.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Cryptotephra Dating Specialist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Cryptotephra Dating specialist',
                'name' => 'Dr. Christine Lane',
                'description' => '
                    Professor<br>
                    Department of Geography<br>
                    University of Cambridge<br>
                    United Kingdom
                ',
                'image' => 'Christine Lane 20220203_111002.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Archaeologist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Archaeologist',
                'name' => 'Mr. Srđan Delić',
                'description' => '
                    Nikšić Muzej<br>
                    Nikšić, Montenegro
                ',
                'image' => 'Srdan Delidc.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Geochemist
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Geochemist (paleoenvironmental reconstruction)',
                'name' => 'Dr. Marga Jambrina-Enríquez',
                'description' => '
                    Assistant Professor<br>
                    Area of Petrology and Geochemistry<br>
                    University of La Laguna<br>
                    Tenerife, Spain
                ',
                'image' => 'Marga Jambrina.jpg',
            ],

            /*
            |--------------------------------------------------------------------------
            | Graduate Students
            |--------------------------------------------------------------------------
            */
            [
                'role' => 'Graduate Student (lithic raw material sourcing)',
                'name' => 'Vasilije Marojevic',
                'description' => '
                    Ph.D. candidate<br>
                    University of Minnesota<br>
                    Minnesota, U.S.A.
                ',
                'image' => 'Vasilije 20190711_144854.jpg',
            ],

            [
                'role' => 'Graduate Student (zooarchaeology by mass spectrometry)',
                'name' => 'Yige Bao',
                'description' => '
                    Ph.D. candidate<br>
                    University of Minnesota<br>
                    Minnesota, U.S.A.
                ',
                'image' => 'Yige Bao.jpg',
            ],

            [
                'role' => 'Graduate Student (zooarchaeology; microfauna)',
                'name' => 'Aleksandra Savković',
                'description' => '
                    University of Belgrade<br>
                    Belgrade, Serbia
                ',
                'image' => null,
            ],

            [
                'role' => 'Graduate Student (lithic residue analysis)',
                'name' => 'Leanne Thothiyil',
                'description' => '
                    Ph.D. candidate<br>
                    University of Minnesota<br>
                    Minnesota, U.S.A.
                ',
                'image' => null,
            ],

        ];
    @endphp


    <!-- Scientific Team -->
    <section class="exhibitions-section">
        <div class="auto-container">

            @foreach(array_chunk($team, 2) as $row)

                <div class="exhibition-block">
                    <div class="row clearfix">

                        @foreach($row as $member)

                            <div class="image-column col-md-6 col-sm-12 col-xs-12">

                                <div class="row">

                                    <!-- Image -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-column">

                                            @if($member['image'])

                                                <div class="image">
                                                    <img
                                                        src="{{ asset('images/resource/' . $member['image']) }}"
                                                        alt="{{ $member['name'] }}">
                                                </div>

                                            @else

                                                <!-- No image currently available -->
                                                <div class="image"
                                                     style="
                                                        min-height: 250px;
                                                        background: #f5f5f5;
                                                     ">
                                                </div>

                                            @endif

                                        </div>
                                    </div>


                                    <!-- Information -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-column">

                                            <h4>
                                                {{ $member['role'] }}
                                            </h4>

                                            <span class="date"
                                                  style="font-size: 20px;">
                                                {{ $member['name'] }}
                                            </span>

                                            <p>
                                                {!! $member['description'] !!}
                                            </p>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>
                </div>

            @endforeach

        </div>
    </section>
    <!-- End Scientific Team -->

@endsection