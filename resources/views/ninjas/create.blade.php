<x-layout>
    <form action="{{route('ninjas.store')}}" method="POST">

      @csrf

      <h2>Create a New Ninja</h2>


      <label for="name">Ninja Name:</label>
      <input
        type="text"
        id="name"
        name="name"
        required
      >


      <label for="skill">Ninja Skill (0-100):</label>
      <input
        type="number"
        id="skill"
        name="skill"
        required
      >


      <label for="bio">Biography:</label>
      <textarea
        rows="5"
        id="bio"
        name="bio"
        required
      ></textarea>


      <label for="dojo_id">Dojo:</label>
      <select id="dojo_id" name="dogo_id" required>
        <option value="" disabled selected>Select a dojo</option>
        @foreach ($dojos as $dojo)
          <option value="{{ $dojo->id }}">
            {{ $dojo->name }}
          </option>
        @endforeach
      </select>

      <button type="submit" class="btn mt-4">Create Ninja</button>



    </form>
  </x-layout>
