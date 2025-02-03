function copyToClipboard(button) {
  const code = button.closest('div').querySelector('pre code').innerText;
  navigator.clipboard.writeText(code).then(() => {
      button.querySelector('#default-message').classList.add('hidden');
      button.querySelector('#success-message').classList.remove('hidden');
      setTimeout(() => {
          button.querySelector('#default-message').classList.remove('hidden');
          button.querySelector('#success-message').classList.add('hidden');
      }, 2000);
  }).catch(err => {
      console.error('Failed to copy: ', err);
  });
}