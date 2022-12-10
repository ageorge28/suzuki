@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Motorcycle</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{ route('admin.motorcycles.store') }}" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name (English)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_en" id="name_en" />
                                          @error('name_en')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name (Malayalam)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_ml" id="name_ml" />
                                          @error('name_ml')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="image">Main Image</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="thumbnailChange(this)"
                                                                class="custom-file-input" id="thumbnail" name="thumbnail">
                                                            <label class="custom-file-label" for="thumbnail">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    @error('thumbnail')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                    <small class="text-danger">Upload images with width = 650px and height = 428px</small>
                                                </div>
                                                <div class="col-4">
                                                    <img id="new_thumbnail" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="image">Other Images</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="photos" name="photos[]" multiple>
                                                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <small class="text-danger">Upload multiple images, each with width = 650px and height = 428px</small>
                                                </div>
                                            </div>
                                            <div class="row" id="preview_photo">
                                            </div>
                                            @error('photo')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="favicon">Category</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option>-- Select Category -- </option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="subcategory_id">Subcategory</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                <option value="" selected disabled>-- Select Subcategory --</option>
                                            </select>
                                            @error('subcategory_id')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Model Number</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="code" id="code" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" step=".01" class="form-control" name="price" id="price" />
                                            <small class="text-danger">Price is not visible on the website</small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Description (English)</label>
                                        </div>
                                        <div class="col-8">
                                            <textarea class="form-control" name="description_en" id="description_en"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Description (Malayalam)</label>
                                        </div>
                                        <div class="col-8">
                                            <textarea class="form-control" name="description_ml" id="description_ml"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="image">Overview Image</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="overviewChange(this)"
                                                                class="custom-file-input" id="overview_image" name="overview_image">
                                                            <label class="custom-file-label" for="overview_image">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    @error('overview_image')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                    <small class="text-danger">Upload images with width = 650px and height = 428px</small>
                                                </div>
                                                <div class="col-4">
                                                    <img id="new_overview_image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Features (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="features_en" id="features_en" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            @error('features_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Features (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="features_ml" id="features_ml" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            @error('features_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Accessories (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="accessories_en" id="accessories_en" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            @error('accessories_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Accessories (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="accessories_ml" id="accessories_ml" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            @error('accessories_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Displacement (cm<sup>3</sup>)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="displacement" id="displacement" />
                                            @error('displacement')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Engine Type (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_type_en" id="engine_type_en" />
                                            @error('engine_type_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Engine Type (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_type_ml" id="engine_type_ml" />
                                            @error('engine_type_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Fuel System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="fuel_system_en" id="fuel_system_en" />
                                            @error('fuel_system_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Fuel System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="fuel_system_ml" id="fuel_system_ml" />
                                            @error('fuel_system_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Valve System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="valve_system_en" id="valve_system_en" />
                                            @error('valve_system_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Valve System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="valve_system_ml" id="valve_system_ml" />
                                            @error('valve_system_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Bore x Stroke</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="bore_stroke" id="bore_stroke" />
                                            @error('bore_stroke')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Engine Output</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_output" id="engine_output" />
                                            @error('engine_output')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Torque</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="torque" id="torque" />
                                            @error('torque')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Starter System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="starter_system_en" id="starter_system_en" />
                                            @error('starter_system_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Starter System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="starter_system_ml" id="starter_system_ml" />
                                            @error('starter_system_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Transmission Type (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="transmission_type_en" id="transmission_type_en" />
                                            @error('transmission_type_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Transmission Type (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="transmission_type_ml" id="transmission_type_ml" />
                                            @error('transmission_type_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Wheels (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="wheels_en" id="wheels_en" />
                                            @error('wheels_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Wheels (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="wheels_ml" id="wheels_ml" />
                                            @error('wheels_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Overall Length (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="length" id="length" />
                                            @error('length')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Overall Width (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="width" id="width" />
                                            @error('width')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Overall Height (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="height" id="height" />
                                            @error('height')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Wheel Base (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="wheel_base" id="wheel_base" />
                                            @error('wheel_base')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Ground Clearance (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="ground_clearance" id="ground_clearance" />
                                            @error('ground_clearance')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Seat Height (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="seat_height" id="seat_height" />
                                            @error('seat_height')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Kerb Mass (kg)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="kerb_mass" id="kerb_mass" />
                                            @error('kerb_mass')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Fuel Tank Capacity (litres)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="fuel_tank_capacity" id="fuel_tank_capacity" />
                                            @error('fuel_tank_capacity')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Front Brakes (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_brakes_en" id="front_brakes_en" />
                                            @error('front_brakes_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Front Brakes (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_brakes_ml" id="front_brakes_ml" />
                                            @error('front_brakes_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Rear Brakes (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_brakes_en" id="rear_brakes_en" />
                                            @error('rear_brakes_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Rear Brakes (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_brakes_ml" id="rear_brakes_ml" />
                                            @error('rear_brakes_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Front Tyre</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_tyre" id="front_tyre" />
                                            @error('front_tyre')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Rear Tyre</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_tyre" id="rear_tyre" />
                                            @error('rear_tyre')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Front Suspension (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_suspension_en" id="front_suspension_en" />
                                            @error('front_suspension_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Front Suspension (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_suspension_ml" id="front_suspension_ml" />
                                            @error('front_suspension_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Rear Suspension (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_suspension_en" id="rear_suspension_en" />
                                            @error('rear_suspension_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Rear Suspension (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_suspension_ml" id="rear_suspension_ml" />
                                            @error('rear_suspension_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Battery (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="battery_en" id="battery_en" />
                                            @error('battery_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Battery (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="battery_ml" id="battery_ml" />
                                            @error('battery_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Headlight</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="headlight" id="headlight" />
                                            @error('headlight')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Taillight</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="taillight" id="taillight" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Brochure</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="brochure" name="brochure">
                                                    <label class="custom-file-label" for="brochure">Choose file</label>
                                                </div>
                                            </div>
                                            <small class="text-danger">Upload only PDF files</small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>YouTube Video Link</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="url" class="form-control" name="video" id="video" />
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Add</button>

                                </form>

                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function thumbnailChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_thumbnail').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function overviewChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_overview_image').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/admin/subcategories/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty();
                            $('select[name="subsubcategory_id"]').html('');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value.name_en + '</option>')
                            });
                        }
                    });
                }
            });
        });
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#photos').on('change', function() { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                        .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file) { //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src',
                                    e.target.result).width(80).height(
                                80); //create image element 
                                $('#preview_photo').append(
                                img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });
            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>

@endsection