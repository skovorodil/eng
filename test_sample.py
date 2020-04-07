from selenium import webdriver
driver = webdriver.Chrome("chromedriver")
EMAIL = "zenit1032@gmail.com"
def test_login() :
      open()
      driver.find_element_by_id("email").send_keys(EMAIL)
      driver.find_element_by_id("pas").send_keys("123456")
      driver.find_element_by_id("login").click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/main.php")), "Oh no! This assertion failed!"
      print ("OK")
 def test_reg() :
      open()
      driver.find_element_by_id("reg").click()
      driver.find_element_by_id("regEmail").send_keys("test"+str(random.randint(0, 1000))+"@gmail.com")
      driver.find_element_by_id("regName").send_keys("Вадим"+str(random.randint(0, 1000)))
      driver.find_element_by_id("regPhone").send_keys(str(random.randint(0, 100000)))
      driver.find_element_by_id("regPas").send_keys("12345")
      driver.find_element_by_id("regButton").click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/welcome.php")), "Oh no! This assertion failed!"
      print ("OK")
      
def open() :
      driver.get("https://eng-slang.000webhostapp.com/")
      driver.maximize_window()
test_login()
test_reg()



