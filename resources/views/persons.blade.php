<div>
        @if (count($persons) > 0)
            @foreach ($persons as $person)
                <p>This is {{ $person->name }}</p>
                <p>The persons driving license number is {{ $person->drivinglicense->drivingLicenseNumber }}</p>
                @if ($person->car != "null")
                    @foreach ($person->car as $car)
                        <br> {{ $person->name }} owns a {{ $car->color}} {{ $car->name}}.
                    @endforeach
                @endif
            @endforeach
        @endif
    </div>