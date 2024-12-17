// const minus = document.getElementById("minus");
// const plus = document.getElementById("plus");
// const container = document.getElementById("additional-inputs");
// let inputCount = 1;

// plus.addEventListener("click", function (e) {
//     e.preventDefault();
//     inputCount++;
//     const newInputDiv = document.createElement("div");
//     newInputDiv.classList.add("mb-3");
//     newInputDiv.setAttribute("id", `input-${inputCount}`);
//     newInputDiv.innerHTML = `
//         <label for="isi1-${inputCount}" class="form-label">Isi ${inputCount}</label>
//         <input class="form-control" id="isi1-${inputCount}" name="isi_bahan_bahan[]" rows="3" />
//         <button type="button" class="btn btn-danger btn-sm remove-input" data-id="${inputCount}">Remove</button>
//     `;
//     container.appendChild(newInputDiv);

//     newInputDiv.querySelector(".remove-input").addEventListener("click", function () {
//         container.removeChild(newInputDiv);
//     });
// });

// minus.addEventListener("click", function (e) {
//     e.preventDefault();
//     const inputs = container.querySelectorAll("input");
//     inputs.forEach((input) => {
//         if (input.value.trim() === "") {
//             input.parentElement.remove();
//         }
//     });
// });


// const minus_isi_bahan = document.getElementById("minus_isi_bahan");
// const plus_isi_bahan = document.getElementById("plus_isi_bahan");
// const container_isi_bahan = document.getElementById("isi_bahan_tampung");
// let inputCount_isi_bahan = 1;

// plus_isi_bahan.addEventListener("click", function (e) {
//     e.preventDefault();
//     inputCount_isi_bahan++;
//     const newDivIsiBahan = document.createElement("div");
//     newDivIsiBahan.classList.add("mb-3");
//     newDivIsiBahan.setAttribute("id", `input-bahan-${inputCount_isi_bahan}`);
//     newDivIsiBahan.innerHTML = `
//         <label for="isiBahan-${inputCount_isi_bahan}" class="form-label">Isi ${inputCount_isi_bahan}</label>
//         <input class="form-control" id="isiBahan-${inputCount_isi_bahan}" name="cara_membuat[]" rows="3" />
//         <button type="button" class="btn btn-danger btn-sm remove-input" data-id="${inputCount_isi_bahan}">Remove</button>
//     `;
//     container_isi_bahan.appendChild(newDivIsiBahan);

//     newDivIsiBahan.querySelector(".remove-input").addEventListener("click", function () {
//         container_isi_bahan.removeChild(newDivIsiBahan);
//     });
// });

// minus_isi_bahan.addEventListener("click", function (e) {
//     e.preventDefault();
//     const inputs_isi_bahan = container_isi_bahan.querySelectorAll("input");
//     inputs_isi_bahan.forEach((input) => {
//         if (input.value.trim() === "") {
//             input.parentElement.remove();
//         }
//     });
// });
