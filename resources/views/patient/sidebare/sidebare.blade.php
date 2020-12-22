<div class="profile-left">
    <div class="menu">
    <ul>
        <li><a href="{{ route('patient.identifiant',Auth::guard('patient')->user()->id) }}"> <span>O</span> Identifiant</a></li>
        <li><a href=""> <span>O</span> Antecedent</a></li>
        <li><a href=""> <span>O</span> Grossesses <span> > </span></a>
            <ul>
                <li><a href=""> <span>O</span> Grossesse 1</a></li>
                <li><a href=""> <span>O</span> Grossesse 2</a></li>
                <li><a href=""> <span>O</span> Grossesse 3</a></li>
            </ul>
        </li>
        <li><a href=""> <span>O</span> Naissances <span> > </span></a>
            <ul>
                <li><a href=""> <span>O</span> Naissance 1</a></li>
                <li><a href=""> <span>O</span> Naissance 2</a></li>
                <li><a href=""> <span>O</span> Naissance 3</a></li>
            </ul>
        </li>
        <li><a href=""> <span>O</span> Urgence</a></li>
        <li><a href=""> <span>O</span> BFP</a></li>
    </ul>
    </div>
</div>