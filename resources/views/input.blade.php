<x-form-layout>
    <div class="warp">
        <div class="main-warp d-flex justify-content-center align-items-center">
            <div class="form-wrap p-5">
                <h2>Masukkan Data</h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Category">
                </div>
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                        <option value="1">Published</option>
                        <option selected value="2">Not Published</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary mt-4">Back</button>
                <button type="button" class="btn btn-success mt-4">Submit</button>
            </div>
        </div>
    </div>
</x-form-layout>
