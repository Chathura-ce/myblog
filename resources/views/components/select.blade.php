@props(['options' => '','select'=>''])
{{--{{print_r($select)}}--}}
<select id="country" name="country" autocomplete="country-name" class="
border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
block w-full rounded-md  py-1.5  sm:text-sm sm:leading-6">
    <option @if($select === '') selected @endif>Select One</option>
    @foreach($options as $option)
    <option @if($select === $option['id']) selected @endif>{{$option['name']}}</option>
    @endforeach
</select>
