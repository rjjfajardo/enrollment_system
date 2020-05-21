@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Academic Announcements</h3></div>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

            <br><br>
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4">
                        <img class="team-img" src="img/bruce.png" width="130" height="130" style="margin-bottom: 4px;">
                        <h5 style="padding-top: 4px;">Developer Student Club Lead</h5>
                        </div>
                        <div class="col-md-8" style="background: white;">
                            <p>Advisory to Tertiary Students
    
                                In view of the Advisory from the Inter-Agency Task Force (IATF) for the Management of Emerging Infectious Diseases on May 14, 2020 indicating physical classes to start only on September 1, 2020, all laboratory and other courses that require extension will not be completed onsite anymore for this semester. The respective Schools will issue their own advisories in this regard given the varying nature and requirements of these courses per discipline. In the meantime, we continue to observe the relevant instructions stipulated in the Advisory issued on April 17, 2020.
                                
                                Further, due to the suspension of face-to-face classes, adjustment of school fees representing the cost of unused facilities and services and fixed amount of semestral fees will be reflected on the students' final assessment for the second semester of AY 2019-2020. Students who are enjoying 100% tuition fee discount as privilege or scholarship provided by the University can only avail of the semestral fee adjustment, while no adjustment shall be made on the assessment of students with full scholarship with the University.
                                
                                All other provisions of the April 17 Advisory not inconsistent with this recent advisory are deemed integrated herein.
                                We are one with you in prayers in the battle of this invisible enemy. We hope and pray that this pandemic will end soon.
                                
                                
                                Stay safe.
            
                                Fr. Aleksander Gaut, SVD
                                Vice President for Academic Affairs
                                
                                Fr. Arthur Z. Villanueva, SVD
                                Vice President for Finance</p>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4">
                        <img class="team-img" src="img/bruce.png" width="130" height="130" style="margin-bottom: 4px;">
                        <h5 style="padding-top: 4px;">Developer Student Club Lead</h5>
                        </div>
                        <div class="col-md-8" style="background: white;">
                            <p>Advisory to Tertiary Students
    
                                In view of the Advisory from the Inter-Agency Task Force (IATF) for the Management of Emerging Infectious Diseases on May 14, 2020 indicating physical classes to start only on September 1, 2020, all laboratory and other courses that require extension will not be completed onsite anymore for this semester. The respective Schools will issue their own advisories in this regard given the varying nature and requirements of these courses per discipline. In the meantime, we continue to observe the relevant instructions stipulated in the Advisory issued on April 17, 2020.
                                
                                Further, due to the suspension of face-to-face classes, adjustment of school fees representing the cost of unused facilities and services and fixed amount of semestral fees will be reflected on the students' final assessment for the second semester of AY 2019-2020. Students who are enjoying 100% tuition fee discount as privilege or scholarship provided by the University can only avail of the semestral fee adjustment, while no adjustment shall be made on the assessment of students with full scholarship with the University.
                                
                                All other provisions of the April 17 Advisory not inconsistent with this recent advisory are deemed integrated herein.
                                We are one with you in prayers in the battle of this invisible enemy. We hope and pray that this pandemic will end soon.
                                
                                
                                Stay safe.
            
                                Fr. Aleksander Gaut, SVD
                                Vice President for Academic Affairs
                                
                                Fr. Arthur Z. Villanueva, SVD
                                Vice President for Finance</p>
                    </div>
                </div>
            </div>
@endsection
