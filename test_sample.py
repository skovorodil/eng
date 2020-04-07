from selenium import webdriver
driver = webdriver.Chrome("chromedriver")
EMAIL = "zenit1032@gmail.com"
def test_reg() :
      open()
      WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.ID, "reg"))).click()
      WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.ID, "regEmail"))).send_keys("test"+str(random.randint(0, 1000))+"@gmail.com")
      WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.ID, "regName"))).send_keys("Вадим"+str(random.randint(0, 1000)))
      WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.ID, "regPhone"))).send_keys(str(random.randint(0, 100000)))
      WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.ID, "regPas"))).send_keys("12345")
      WebDriverWait(driver, 40).until(EC.element_to_be_clickable((By.ID, "regButton"))).click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/welcome.php")), "Oh no! This assertion failed!"
      print ("OK")
def test_login() :
      open()
      driver.find_element_by_id("email").send_keys(EMAIL)
      driver.find_element_by_id("pas").send_keys("1234")
      driver.find_element_by_id("login").click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/main.php")), "Oh no! This assertion failed!"
      print ("OK")
      
def open() :
      driver.get("https://eng-slang.000webhostapp.com/")
      driver.maximize_window()
test_login()
test_reg()



