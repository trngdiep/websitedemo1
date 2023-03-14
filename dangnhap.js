function onChange() {
    const password = document.querySelector("input[name=passwd]");
    const confirm = document.querySelector("input[name=confirm-passwd]");
    if (confirm.value === password.value) {
      confirm.setCustomValidity("");
    } else {
      confirm.setCustomValidity("Passwords do not match");
    }
  }