function delay(n) {
n = n || 1000;
return new Promise(done => {
  setTimeout(() => {
    done();
  }, n);
});
}
