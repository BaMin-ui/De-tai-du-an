function ktraten() {
    var ht = document.getElementById("register-fullname").value;
    var ten = /^([A-Z]{1}[a-z]*)(\s[A-Z][a-z]*)*$/;
    if (ten.test(ht)) {
        document.getElementById("err-fullname").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-fullname").innerHTML = "Phải nhập đúng mẫu: Nguyen Van A";
        return false;
    }
}

function ktrangaysinh() {
    var birth = document.getElementById("register-birthdate").value;
    var birthDate = new Date(birth);
    var today = new Date();
    var age = today.getFullYear() - birthDate.getFullYear();
    if (age >= 16 && age <= 100) {
        document.getElementById("err-birthdate").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-birthdate").innerHTML = "Tuổi phải từ 16 đến 100.";
        return false;
    }
}

function ktraemail() {
    var email = document.getElementById("register-email").value;
    var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (regex.test(email)) {
        document.getElementById("err-email").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-email").innerHTML = "Email không hợp lệ!";
        return false;
    }
}

function ktradt() {
    var sdt = document.getElementById("register-phone").value;
    var dt = /^0[2-9]{1}\d{8}$/;
    if (dt.test(sdt)) {
        document.getElementById("err-phone").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-phone").innerHTML = "Nhập đúng mẫu: 0xxxxxxxxx";
        return false;
    }
}

function ktrausername() {
    var username = document.getElementById("register-username").value;
    var regex = /^[a-zA-Z][a-zA-Z0-9_.]{4,19}$/;
    if (regex.test(username)) {
        document.getElementById("err-username").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-username").innerHTML = "Tên đăng nhập phải bắt đầu bằng chữ cái, dài 5-20 ký tự.";
        return false;
    }
}

function ktrapassword() {
    var password = document.getElementById("register-password").value;
    var regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (regex.test(password)) {
        document.getElementById("err-password").innerHTML = "";
        
        return true;
    } else document.getElementById("err-password").innerHTML = " Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt.";
    return false;
}

function ktraxacnhan() {
    var password = document.getElementById("register-password").value;
    var confirm = document.getElementById("register-confirm-password").value;
    if (password === confirm) {
        document.getElementById("err-xacnhan").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-xacnhan").innerHTML = "Mật Khẩu Không Trùng Khớp Vui Lòng Nhập Lại";
        return false;

    }

}

function ktralogusername() {
    var username = document.getElementById("login-username").value;
    var regex = /^[a-zA-Z][a-zA-Z0-9_.]{4,19}$/;
    if (regex.test(username)) {
        document.getElementById("err-loginuser").innerHTML = "";
        return true;
    } else {
        document.getElementById("err-loginuser").innerHTML = "Tên đăng nhập phải bắt đầu bằng chữ cái, dài 5-20 ký tự.";
        return false;
    }
}

function ktralogpassword() {
    var password = document.getElementById("login-password").value;
    var regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (regex.test(password)) {
        document.getElementById("err-loginpass").innerHTML = "";
        return true;
    } else document.getElementById("err-loginpass").innerHTML = " Mật khẩu phải có ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt.";
    return false;
}
var i = 1;

function Luu() {
    if (!ktradt() || !ktraemail() || !ktrangaysinh() || !ktrapassword() || !ktraten() || !ktrausername() || !ktraxacnhan()) {
        alert("Vui Lòng Nhập Lại Thông Tin");
        return false;
    }

    var ten = document.getElementById("register-fullname").value;
    var email = document.getElementById("register-email").value;
    var ns = document.getElementById("register-birthdate").value;
    var user = document.getElementById("register-username").value;
    var dt = document.getElementById("register-phone").value;
    var gt;
    var rad = document.querySelectorAll("input[name='Gender']");
    rad.forEach(function (ch) {
        if (ch.checked) {
            gt = ch.value; // radio
        }
    })


    // Thêm vào bảng hiện tại (nếu có)
    var tb = document.getElementById("userList");

    var row = tb.insertRow(i);
    var cot1 = row.insertCell(0);
    var cot2 = row.insertCell(1);
    var cot3 = row.insertCell(2);
    var cot4 = row.insertCell(3); // ngon ngu checkbox
    var cot5 = row.insertCell(4);
    var cot6 = row.insertCell(5);
    var cot7 = row.insertCell(6);
    var cot8 = row.insertCell(7);


    cot1.innerHTML = i;
    cot2.innerHTML = ten;
    cot3.innerHTML = ns;
    cot4.innerHTML = email;
    cot5.innerHTML = gt;
    cot6.innerHTML = dt;
    cot7.innerHTML = user;


    i++;
}




document.addEventListener("DOMContentLoaded", function () {

    // Khởi tạo carousel tự động chạy sau 3 giây, dừng khi hover, và cho phép lặp lại
    let carouselElement = document.querySelector("#carouselId");
    if (carouselElement) {
        var myCarousel = new bootstrap.Carousel(carouselElement, {
            interval: 3000,   // Thời gian chuyển slide (ms) -> 3 giây
            pause: "hover",   // Tạm dừng khi người dùng di chuột vào carousel
            wrap: true,       // Cho phép quay vòng (slide cuối quay về slide đầu)
        });
    }
    // Lấy các phần tử liên quan đến giỏ hàng
    const cartToggle = document.getElementById("cart-toggle");
    const cart = document.getElementById("cart");
    const cartClose = document.getElementById("cart-close");
    const cartBody = document.getElementById("cart-body");
    const cartTotal = document.getElementById("cart-total");

    let cartItems = []; // Mảng chứa các sản phẩm trong giỏ hàng
    let totalAmount = 0; // Tổng số tiền trong giỏ hàng

    // Hiển thị hoặc ẩn giỏ hàng khi nhấn nút toggle
    cartToggle.addEventListener("click", () => {
        cart.classList.add("show-cart");
    });

    // Ẩn giỏ hàng khi nhấn nút close
    cartClose.addEventListener("click", () => {
        cart.classList.remove("show-cart");
        cart.style.display = "none";
    });


    // Cập nhật hiển thị giỏ hàng
    function updateCart() {
        cartBody.innerHTML = cartItems.length ?
            cartItems
                .map(
                    (item, index) => `
          <div class="cart-item d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
            <div class="d-flex align-items-center">
              <img src="${item.image}" alt="${item.name}" 
                   class="cart-item-img" 
                   style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
              <div class="ms-3">
                <p class="mb-1"><strong>${item.name}</strong></p>
                <p class="mb-0"><strong>${(item.price * item.quantity).toLocaleString()} đ</strong></p>
              </div>
            </div>
            <button class="btn btn-sm btn-danger remove-item" data-index="${index}">Xóa</button>
          </div>`
                )
                .join("") :
            '<p class="pt-2">Giỏ hàng của bạn trống.</p>';

        cartTotal.innerText = totalAmount.toLocaleString();
        attachRemoveEvents();
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        localStorage.setItem("totalAmount", totalAmount.toString());
    }


    // Xóa sản phẩm khỏi giỏ hàng
    function attachRemoveEvents() {
        document.querySelectorAll(".remove-item").forEach((button) => {
            button.addEventListener("click", function () {
                let index = this.getAttribute("data-index");
                totalAmount -= cartItems[index].price * cartItems[index].quantity;
                cartItems.splice(index, 1);
                updateCart();
            });
        });
    }

    const checkoutBtn = document.getElementById("checkout-btn");

    // Kiểm tra nếu sự kiện thanh toán
    if (!checkoutBtn.hasAttribute("data-clicked")) {
        checkoutBtn.setAttribute("data-clicked", "true");

        checkoutBtn.addEventListener("click", function () {
            if (cartItems.length === 0) {
                alert(
                    "🛒 Giỏ hàng của bạn đang trống. Hãy thêm sản phẩm trước khi Đặt Hàng!"
                );
                return;
            }

            let confirmCheckout = confirm(
                `Xác nhận đặt hàng ${totalAmount.toLocaleString()} đ?`
            );
            if (confirmCheckout) {
                let receipt = "🧾 HÓA ĐƠN ĐẶT HÀNG\n-------------------------------------------------------\n";
                cartItems.forEach((item) => {
                    receipt += `${item.name}  - ${item.quantity
                        } x ${item.price.toLocaleString()} đ\n`;
                });
                receipt += `-------------------------------------------------------\nTổng cộng: ${totalAmount.toLocaleString()} đ`;

                alert(receipt);
                // Reset giỏ hàng sau khi thanh toán
                cartItems = [];
                totalAmount = 0;
                updateCart();
            }
        });
    }

    // Xử lý khi click vào ảnh sản phẩm để mở modal
    document.querySelectorAll(".product-image").forEach((img) => {
        img.addEventListener("click", function () {
            let name = this.getAttribute("data-name");
            let price = this.getAttribute("data-price");
            let image = this.getAttribute("src");
            let description = this.getAttribute("data-description");


            // Nội dung cơ bản của modal
            let modalContent = `
            <div class="row">
                <div class="col-md-5">
                    <img src="${image}" class="img-fluid" alt="${name}">
                </div>
                <div class="col-md-7">
                    <h4 id="modalProductName">${name}</h4>
                    <p style="font-size: 20px;"><strong >Giá:</strong> <span id="modalProductPrice">${parseInt(price).toLocaleString()}</span> đ</p>
                    <p>${description}</p>`;







            // Phần số lượng và nút thêm vào giỏ/mua ngay
            modalContent += `
      </div>
      </div>
      <div class="modal-footer d-flex justify-content-end align-items-center">
          <label class="fw-bold me-2">Số lượng:</label>
          <input type="number" id="quantity" class="form-control me-5" value="1" min="1" style="width: 60px;">
          <button type="button" class="btn btn-primary add-to-cart-modal">Thêm vào giỏ</button>
          <button type="button" class="btn btn-success buy-now">Mua ngay</button>
      </div>`;



            // Gán nội dung vào modal
            document.getElementById("productModalBody").innerHTML = modalContent;

            let modalElement = document.getElementById("productModal");

            // Kiểm tra xem modal đã được khởi tạo trước đó chưa
            if (!modalElement.modalInstance) {
                modalElement.modalInstance = new bootstrap.Modal(modalElement);
            }

            // Hiển thị modal
            modalElement.modalInstance.show();
        });
    });


    // Xử lý các sự kiện click liên quan đến modal
    // Hàm lấy giá trị đã chọn hoặc trả về null nếu không có tùy chọn đó
    // Hàm lấy giá trị đã chọn từ radio button


    document.addEventListener("click", function (event) {
        const target = event.target;

        if (target.matches(".buy-now, .add-to-cart-modal")) {
            event.stopImmediatePropagation();

            const productName = document.getElementById("modalProductName").innerText;
            const price = parseInt(document.getElementById("modalProductPrice").innerText.replace(/\D/g, ""));
            const quantity = parseInt(document.getElementById("quantity").value);
            const image = document.querySelector("#productModalBody img").src;



            // Xây dựng mô tả sản phẩm
            let productDetails = `🛒 Đặt hàng thành công!\n\nBạn đã đặt ${quantity} sản phẩm:\n"${productName}"`;
            let attributes = [];



            if (attributes.length > 0) {
                productDetails += `\n${attributes.join(" - ")}`;
            }

            productDetails += `\nGiá: ${price.toLocaleString()} đ`;

            if (target.classList.contains("buy-now")) {
                alert(productDetails);
                bootstrap.Modal.getInstance(document.getElementById("productModal")).hide();
            } else {
                cartItems.push({ name: productName, price, quantity, image });
                totalAmount += price * quantity;
                updateCart();

                let cartMessage = `✅ Thêm vào giỏ hàng thành công!\n\nSản phẩm: "${productName}"`;
                if (attributes.length > 0) {
                    cartMessage += `\n${attributes.join(" - ")}`;
                }
                cartMessage += `\nSố lượng: ${quantity}\nTổng giá: ${(price * quantity).toLocaleString()} đ`;

                alert(cartMessage);
                cart.style.display = "block";
            }
        }


    });
    const savedCart = localStorage.getItem("cartItems");
    const savedTotal = localStorage.getItem("totalAmount");

    if (savedCart) {
        cartItems = JSON.parse(savedCart);
        totalAmount = parseInt(savedTotal) || 0;
        updateCart();
    }

});

