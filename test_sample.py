from selenium import webdriver
driver = webdriver.Chrome("chromedriver")
EMAIL = "zenit1032@gmail.com"
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
test_login()


