{{-- Dropdowns --}}
<section id="type" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Forms</h3>
    </div>
  </div>
  <div class="g__row">
    <div class="g__col">
      <h6 class="caps">Custom Selects</h6>
      <hr>
    </div>
  </div>
  {{-- Single Dropdown --}}
  <div class="g__row mb-4">
    <div class="g__col6">
      <multiselect
        :options="[
          {label : 'option one', value : '1' },
          {label : 'option two', value : '2'},
          {label : 'option three', value : '3'},
          {label : 'option four', value : '4'},
          {label : 'option five', value : '5'},
          {label : 'option six', value : '6'},
          {label : 'option seven', value : '7'},
          {label : 'option eight', value : '8'},
          {label : 'option nine', value : '9'},
          {label : 'option ten', value : '10'},
          {label : 'option eleven', value : '11'},
          {label : 'option twelve', value : '12'},
          {label : 'option thirteen', value : '13'},
          ]"
          track-by="value"
          label="label"
          placeholder="Select Option"
          style="width: 300px"
          ></multiselect>
    </div>
    <div class="g__col6">
      <multiselect
        :options="[
          {label : 'option one', value : '1' },
          {label : 'option two', value : '2'},
          {label : 'option three', value : '3'},
          ]"
          placeholder="Disabled Select"
          disabled
          style="width: 100%"

          ></multiselect>
    </div>
  </div>

  <div class="g__row">
    <div class="g__col6">
      <multiselect
        :options="[
          {label : 'option one', value : '1' },
          {label : 'option two', value : '2'},
          {label : 'option three', value : '3'},
          {label : 'option four', value : '4'},
          {label : 'option five', value : '5'},
          {label : 'option six', value : '6'},
          {label : 'option seven', value : '7'},
          {label : 'option eight', value : '8'},
          {label : 'option nine', value : '9'},
          {label : 'option ten', value : '10'},
          {label : 'option eleven', value : '11'},
          {label : 'option twelve', value : '12'},
          {label : 'option thirteen', value : '13'},
          ]"
          track-by="value"
          label="label"
          multiple
          :close-on-select="false"

          placeholder="Select Multiple"
          style="width: 100%"
          ></multiselect>
    </div>
  </div>
</section>

<div style="height: 100vh"></div>
