<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Students</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('touristSpots.index') }}"
       class="nav-link {{ Request::is('touristSpots*') ? 'active' : '' }}">
        <p>Tourist Spots</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('otherOptions.index') }}"
       class="nav-link {{ Request::is('otherOptions*') ? 'active' : '' }}">
        <p>Other Options</p>
    </a>
</li>


