watch('(\d{4}-\d{2}-\d{2})-(tests|code)\.php') do |matches|
    system "clear && php #{matches[1]}-tests.php"
end