    <div class="formbold-form-step-1 active">
        <form action="/dashboard/insertProduct" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <div class="formbold-input-flex">
                <div>
                    <label for="firstname" class="formbold-form-label"> Product name </label>
                    <input type="text" name="name" placeholder="exomple product " id="firstname"
                        class="formbold-form-input" />
                </div>
                <div>
                    <label for="firstname" class="formbold-form-label"> Image</label>
                    <input type="file" name="image_name" class="formbold-form-input" />
                </div>
            </div>

            <div>
                <div>
                    <label for="dob" class="formbold-form-label"> Price </label>
                    <input type="number" name="price" placeholder="00,00 DH" id="dob"
                        class="formbold-form-input" />
                    <input type="hidden" name="status" placeholder="00,00 DH" id="dob"
                        value="en stock" />
                </div>
            </div>
            <div class="discription">
                <label for="address" class="formbold-form-label">description </label>
                <input type="text" name="description" id="address" placeholder="A simple discreption"
                    class="formbold-form-input form-control" />
            </div>
            <div class=" my-4">
                <div>
                    <button type="submit" value=" ADD PRODUCT" class="btn btn-primary form-control"> ADD
                        PRODUCT</button>
                </div>
            </div>
        </form>
    </div>
