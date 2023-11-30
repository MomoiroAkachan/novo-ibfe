<form class="mt-4" wire:submit="save">
    @csrf
    <div class="context">
        @foreach ($questions as $item)
            <fieldset class="field">
                <label for="selects{{ $item['number'] }}">
                    <span class="number">{{ $item['number'] }})</span>
                    <span class="text">{{ $item['question'] }}</span>
                    <span class="star">*</span>
                </label>
                <select class="in_select" id="selects{{ $item['number'] }}" name="selects{{ $item['number'] }}" wire:model="selects.{{ $item['number'] }}">
                    <option disabled hidden {{ $answers[$item['number']] == 0 ? 'selected' : '' }} value=""></option>
                    <option {{ $answers[$item['number']] == 1 ? 'selected' : '' }} value="1">Concordo totalmente</option>
                    <option {{ $answers[$item['number']] == 2 ? 'selected' : '' }} value="2">Concordo</option>
                    <option {{ $answers[$item['number']] == 3 ? 'selected' : '' }} value="3">Concordo parcialmente</option>
                    <option {{ $answers[$item['number']] == 4 ? 'selected' : '' }} value="4">Discordo</option>
                    <option {{ $answers[$item['number']] == 5 ? 'selected' : '' }} value="5">Discordo totalmente</option>
                </select>
            </fieldset>
        @endforeach
        <div class="flex flex-row justify-between my-4">
            <button class="ie-button small" type="submit">Salvar</button>
            <a class="ie-button small" href="{{ route('survey.show.results') }}">Terminar</a>
        </div>
    </div>
    {{ $questions->links() }}
</form>
